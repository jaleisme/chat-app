import React from "react";
import { auth, database, firestore, storage } from "../lib/firebase.lib";
import { onAuthStateChanged } from "firebase/auth";
import { FiPaperclip } from "react-icons/fi"
import { useNavigate } from "react-router-dom";
import { onValue, set, ref } from "firebase/database";
import { v4 as uuid } from 'uuid';
import { getDoc, doc } from "firebase/firestore";
import { uploadBytes, ref as storageRef, getDownloadURL } from "firebase/storage";
import prettyBytes from "pretty-bytes";

const Chat = () => {
    const [user, setUser] = React.useState({});
    const [chats, setChats] = React.useState([]);
    const navigate = useNavigate();

    React.useEffect(() => {
        onAuthStateChanged(auth, async (user) => {
            if(!user){
                navigate('/login');
            } else {
                const userId = user.uid;
                const firestoreRef = doc(firestore, 'users', userId);
                const snapshot = await getDoc(firestoreRef);
                setUser(snapshot.data());
            }
        });
        onValue(ref(database, "chats"), (snapshot) => {
            if(snapshot?.toJSON()){
                const data = Object.values(snapshot.toJSON());
                data.sort((a,b) => a.sentAt.raw - b.sentAt.raw);
                setChats(data);
            } else {
                setChats([]);
            }
        });
    }, []);

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

    const sendMessage = async (event) => {
        event.preventDefault();
        const {value: message} = event.target.message;
        if(message){            
            // Setting realtime chat message doc
            const messageId = uuid();
            const userId = auth.currentUser.uid;
            const dbRef = ref(database, 'chats/'+messageId);
            set(dbRef, {
                id: messageId,
                senderId: userId,
                senderName: user.fullname,
                message: message,
                sentAt: {
                    formatted: getDate(),
                    raw: new Date().getTime()
                },
            });
            event.target.message.value = ''
        }
    }

    const uploadFile = async (event) => {
        const file = event.target.files[0];
        if(file.size > 1024 * 1024){
            window.alert("File size can't be larger than 1MB!");
            return
        }
        const filename = uuid();
        const fileRef = storageRef(storage, "files/"+filename);
        const results = await uploadBytes(fileRef, file);
        const messageId = uuid();
        const userId = auth.currentUser.uid;
        const dbRef = ref(database, 'chats/'+messageId);
        const url = await getDownloadURL(fileRef)
        set(dbRef, {
            id: messageId,
            senderId: userId,
            senderName: user.fullname,
            media: {
                filename: file.name,
                path: results.metadata.md5Hash,
                size: file.size,
                url,
            },
            sentAt: {
                formatted: getDate(),
                raw: new Date().getTime()
            },
        });
    }

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
        <div className="flex h-screen flex-col">
            <div ref={chatContainer} className="flex-1 flex flex-col bg-[url('/bg.png')] p-2 gap-2">
                {/* <div role="alert" className="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" className="stroke-info shrink-0 w-6 h-6"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>12 unread messages. Tap to see.</span>
                </div> */}
                {
                    chats.map(chat => {
                        if(chat.senderId === auth.currentUser.uid) {
                            return (
                                <div key={chat.id} className="chat chat-end w-full">
                                    <div className="chat-bubble bg-gray-800 p-3 max-w-[80%] flex flex-col gap-1">
                                        <span className="font-bold text-sky-500 text-xs">You</span>
                                        <div className="flex gap-2 items-end">
                                            {chat.message && <p className="text-sm w-full">{chat.message}</p>}
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
                                    <div className="chat-bubble bg-gray-800 p-3 max-w-[80%] flex flex-col gap-1">
                                        <span className="font-bold text-rose-500 text-xs">{chat.senderName}</span>
                                        <div className="flex gap-2 items-end">
                                            {chat.message && <p className="text-sm w-full">{chat.message}</p>}
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
            <div className="bg-white sticky bottom-0 w-full min-h-fit px-4 py-2 z-20">
                <form onSubmit={sendMessage} className="flex gap-2">
                    <label htmlFor="" className="flex flex-1 justify-between input input-bordered w-full py-1 px-2">
                        <textarea name="message" placeholder="Type here..." className="w-full text-sm outline-none h-full py-2"></textarea>
                        <label htmlFor="fileUpload" className="h-full flex items-center">
                            <FiPaperclip />
                            <input type="file" className="hidden" onChange={uploadFile} id="fileUpload" />
                        </label>
                    </label>
                    <button type="submit" className="btn btn-primary text-white">Send</button>
                </form>
            </div>
        </div>
    )
}

export default Chat;