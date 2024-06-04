/* eslint-disable react/prop-types */
import React from "react";
import { auth, database } from "../lib/firebase.lib";
import { FiArrowUp } from "react-icons/fi"
import { onValue, set, ref } from "firebase/database";
import { v4 as uuid } from 'uuid';
// import { uploadBytes, ref as storageRef, getDownloadURL } from "firebase/storage";
import prettyBytes from "pretty-bytes";
import axios from "axios";
import { RiRobot3Line } from "react-icons/ri";
import { GiSkills } from "react-icons/gi";
import { FaRegListAlt } from "react-icons/fa";

// import { onAuthStateChanged } from "firebase/auth";
// import { useNavigate } from "react-router-dom";
// import { getDoc, doc } from "firebase/firestore";

const Chat = () => {
    const [chats, setChats] = React.useState([]);

    const username = localStorage.getItem('username')
    const user = JSON.parse(localStorage.getItem('user')?.toString())
    const chatId = localStorage.getItem('chatId')
    
    const refUrl = `chatbot/${user.uid}/${chatId}`

    React.useEffect(() => {
        onValue(ref(database, refUrl), (snapshot) => {
            if(snapshot?.toJSON()){
                const data = Object.values(snapshot.toJSON());
                data.sort((a,b) => a.sentAt.raw - b.sentAt.raw);
                setChats(data);
            } else {
                setChats([]);
            }
        });
    }, [refUrl]);

    const chatContainer = React.useRef()

    React.useEffect(() => {
        window.scrollTo(0, chatContainer.current.clientHeight);
    }, [chats]);

    const getDate = () => {
        const today = new Date();
        const date = today.getDate();
        const month = today.getMonth();
        const year = today.getFullYear();
        const hour = today.getHours();
        const minute = today.getMinutes();
        const formattedDate = date+"/"+month+"/"+year+" "+hour+":"+minute;
        return formattedDate;
    }

    const botRespond = async (sentence) => {
        var bodyFormData = new FormData();
        bodyFormData.append('sentence', sentence);
        await axios({
            method: "post",
            url: "http://192.168.50.106:5000/chatbot",
            data: bodyFormData,
            headers: { "Content-Type": "multipart/form-data" },
          }).then((response) => {
                console.log(response);
                const messageId = uuid();
                const userId = "PMBOT-v.1";
                const dbRef = ref(database, refUrl+"/"+messageId);
                set(dbRef, {
                    id: messageId,
                    senderId: userId,
                    senderName: "HelpBot",
                    message: response.data,
                    sentAt: {
                        formatted: getDate(),
                        raw: new Date().getTime()
                    },
                });
                
            })
            .catch(function (response) {
              console.log(response);
            });
    }

    const sendMessage = async (event) => {
        event.preventDefault();
        const {value: message} = event.target.message;
        if(message){            
            // Setting realtime chat message doc
            const messageId = uuid();
            const userId = user.uid;
            const dbRef = ref(database, refUrl+"/"+messageId);
            set(dbRef, {
                id: messageId,
                senderId: userId,
                senderName: username,
                message: message,
                sentAt: {
                    formatted: getDate(),
                    raw: new Date().getTime()
                },
            });
            event.target.message.value = ''
        }
        await botRespond(message);
    }

    const generatedMessage = async(message) => {
        event.preventDefault();
        const msg = message;
        if(msg){            
            // Setting realtime chat message doc
            const messageId = uuid();
            const userId = user.uid;
            const dbRef = ref(database, refUrl+"/"+messageId);
            set(dbRef, {
                id: messageId,
                senderId: userId,
                senderName: username,
                message: msg,
                sentAt: {
                    formatted: getDate(),
                    raw: new Date().getTime()
                },
            });
        }
        await botRespond(message);
    }

    // const uploadFile = async (event) => {
    //     const file = event.target.files[0];
    //     if(file.size > 1024 * 1024){
    //         window.alert("File size can't be larger than 1MB!");
    //         return
    //     }
    //     const filename = uuid();
    //     const fileRef = storageRef(storage, "files/"+filename);
    //     const results = await uploadBytes(fileRef, file);
    //     const messageId = uuid();
    //     const userId = auth.currentUser.uid;
    //     const dbRef = ref(database, 'chatbot/'+messageId);
    //     const url = await getDownloadURL(fileRef)
    //     set(dbRef, {
    //         id: messageId,
    //         senderId: userId,
    //         senderName: username,
    //         media: {
    //             filename: file.name,
    //             path: results.metadata.md5Hash,
    //             size: file.size,
    //             url,
    //         },
    //         sentAt: {
    //             formatted: getDate(),
    //             raw: new Date().getTime()
    //         },
    //     });
    // }

    const isImage = (fileName) => {
        const ext = ['jpg', 'jpeg', 'png', 'gif'];
        const isIncluded = [];
        ext.forEach((extension) => {
            if(fileName.endsWith(extension)){
                isIncluded.push(true);
            } else {
                isIncluded.push(false);
            }
        })
        return isIncluded.includes(true);
    }

    const chatTimeParser = (timeText) => {
        let temp = timeText.split(" ");
        return temp[1];
    }
    
    return (
        <div className="flex h-full flex-col w-full">
            <div ref={chatContainer} className="flex-1 flex flex-col px-4 gap-2">
                {(chats.length <= 0) ?
                <div className="flex w-fit gap-4 h-full items-center mx-auto">
                    <div className="alert flex flex-col items-start text-start border border-neutral-700 bg-transparent gap-2 active:bg-neutral-950 active:border active:border-sky-500 active:tex-sky-500 select-none" onClick={() => generatedMessage("Berikan informasi mengenai program studi yang tersedia di UIN Sunan Gunung Djati Bandung")}>
                        <FaRegListAlt className="w-[20px] h-[20px] text-sky-500"/>
                        <span className="text-xs leading-normal">Daftar program studi di UIN Bandung</span>
                    </div>
                    <div className="alert flex flex-col items-start text-start border border-neutral-700 bg-transparent gap-2 active:bg-neutral-950 active:border active:border-sky-500 active:tex-sky-500 select-none" onClick={() => generatedMessage("Jalur masuk apa saja yang tersedia di UIN Sunan Gunung Djati Bandung?")}>
                        <GiSkills className="w-[20px] h-[20px] text-rose-500"/>
                        <span className="text-xs leading-normal">Informasi jalur masuk di UIN Bandung</span>
                    </div>
                </div>
                :''}

                {
                    chats.map(chat => {
                        if(chat.senderId === auth.currentUser.uid) {
                            return (
                                <div key={chat.id} className="chat chat-end w-full">
                                    <div className="chat-bubble bg-neutral-800 p-3 max-w-[80%] flex flex-col gap-1">
                                        <span className="font-bold text-sky-500 text-xs">You</span>
                                        <div className="flex flex-col gap-2 items-end">
                                            {chat.message && <p className="text-sm w-full break-words">{chat.message}</p>}
                                            {chat.media && <div className="">
                                                {isImage(chat.media.filename) ?
                                                    (<div><img src={chat.media.url} alt={chat.media.filename} className="w-64 rounded-md" /> <span className="absolute right-4 bottom-4  z-10 w-fit text-right font-semibold text-white text-[10px]">{chatTimeParser(chat.sentAt.formatted)}</span></div>) : 
                                                    (<div className=" w-full flex flex-col">
                                                        <a href={chat.media.url} download={chat.media.filename} target="_blank" className="rounded-lg bg-gray-700 text-gray-200 text-sm p-2">{chat.media.filename}</a>
                                                        <small className="text-xs text-gray-500">{prettyBytes(chat.media.size)}</small>
                                                    </div>
                                                    )
                                                }</div>
                                            }
                                            {(chat.message) && (<span className="w-fit text-right text-gray-500 text-[10px]">{chatTimeParser(chat.sentAt.formatted)}</span>)
                                            }
                                        </div>
                                    </div>
                                </div>
                            );
                        } else {
                            return (
                                <div key={chat.id} className="chat chat-start w-full">
                                    <div className="chat-bubble bg-neutral-800 p-3 max-w-[80%] flex flex-col gap-1">
                                        <div className="font-bold text-emerald-500 text-xs flex gap-[0.5px] items-center"><RiRobot3Line/>{chat.senderName}</div>
                                        <div className="flex flex-col gap-[0.5px] items-end">
                                            {chat.message && <p className="text-sm w-full break-words">{chat.message}</p>}
                                            {chat.media && <div className="">
                                                {isImage(chat.media.filename) ?
                                                    (<div><img src={chat.media.url} alt={chat.media.filename} className="w-64 rounded-md" /> <span className="absolute right-4 bottom-4  z-10 w-fit text-right font-semibold text-white text-[10px]">{chatTimeParser(chat.sentAt.formatted)}</span></div>) : 
                                                    (<div className=" w-full flex flex-col">
                                                        <a href={chat.media.url} download={chat.media.filename} target="_blank" className="rounded-lg bg-gray-700 text-gray-200 text-sm p-2">{chat.media.filename}</a>
                                                        <small className="text-xs text-gray-500">{prettyBytes(chat.media.size)}</small>
                                                    </div>
                                                    )
                                                }</div>
                                            }
                                            {(chat.message) && (<span className="w-fit text-right text-gray-500 text-[10px]">{chatTimeParser(chat.sentAt.formatted)}</span>)
                                            }
                                        </div>
                                    </div>
                                </div>
                            );
                        }
                    })
                }
            </div>
            <div className="bg-neutral-900 sticky bottom-0 w-full min-h-fit rounded-full px-4 py-2">
                <form onSubmit={sendMessage}>
                    <label htmlFor="" className="flex flex-1 justify-between input w-full px-2 py-2 bg-neutral-800 focus:bg-neutral-800 text-white-900 outline-none border-none rounded-full h-fit items-center ">
                        <textarea name="message" placeholder="Type here..." className="resize-none w-full text-sm outline-none py-2 text-white items-center bg-transparent px-2 rounedd-full max-h-10"></textarea>
                        <button type="submit" className="text-white p-3 rounded-full bg-neutral-700 h-fit"><FiArrowUp className="w-4 h-4 font-bold"/></button>
                        {/* <label htmlFor="fileUpload" className="h-full flex items-center">
                            <FiPaperclip />
                            <input type="file" className="hidden" onChange={uploadFile} id="fileUpload" />
                        </label> */}
                    </label>
                </form>
            </div>
        </div>
    )
}

export default Chat;