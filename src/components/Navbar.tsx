import { onAuthStateChanged, signOut } from "firebase/auth";
import React, { useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";
import { auth, database } from "../lib/firebase.lib";
import { FiChevronDown, FiPower } from "react-icons/fi";
import { BiMessageAdd } from "react-icons/bi";
import { v4 as uuid } from 'uuid';
import { onValue, ref } from "firebase/database";
import { BsJustifyLeft  } from "react-icons/bs";

const Navbar = () => {
    const [chatlist, setChatlist] = useState([]);
    
    const navigate = useNavigate();
    const userData = JSON.parse(localStorage.getItem('user')?.toString()!)
    
    const refUrl = `chatbot/${userData.uid}`

    const logout = async () => {
        localStorage.removeItem('user')
        localStorage.removeItem('username')
        await signOut(auth);
        navigate('/login');
    }

    const newChat = () => {
        const chatId = uuid()
        localStorage.setItem('chatId', chatId)
        navigate(0)
    }

    const loadChat = (chatId) => {
        localStorage.setItem('chatId', chatId)
        navigate(0)
    }

    useEffect(() => {
        onAuthStateChanged(auth, async (user) => {
            if(!user){
                navigate('/login');
            }
        });
    }, [])

    React.useEffect(() => {
        onValue(ref(database, refUrl), (snapshot) => {
            const res = snapshot.toJSON()!;
            var list: any = []
            for(var [key, val] of Object.entries(res)){
                var temp = []
                temp['id'] = key
                temp['title'] = val[Object.keys(val)[Object.keys(val).length - 1]].message
                list.push(temp)
            }
            setChatlist(list)
        });
    }, []);
    

    return <>
    <div className="drawer w-full sticky top-0 z-20 bg-neutral-900">
        <input id="my-drawer-3" type="checkbox" className="drawer-toggle" /> 
        <div className="drawer-content flex flex-col">
            {/* Navbar */}
            <div className="w-full navbar bg-netural-900 text-white flex justify-between items-center px-2 lg:px-8">
                <div className="">
                    <label htmlFor="my-drawer-3" aria-label="open sidebar" className="btn btn-square btn-ghost">
                        <BsJustifyLeft className="w-6 h-6" />
                    </label>
                </div> 
                <div className="">
                    <details className="dropdown">
                        <summary className="btn hover:bg-neutral-800 bg-neutral-900 border-none text-white font-bold text-xl flex gap-0 items-center justify-center">Chat<span className="text-sky-500">PMB</span><FiChevronDown className="ml-1 text-xs"/></summary>
                        <ul className="p-2 shadow menu dropdown-content z-[1] rounded-box w-52 bg-neutral-800">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                    </details>
                </div>
                <button type="button" onClick={() => newChat()} className="px-3 py-3 rounded-md text-xl text-white bg-neutral-900 transition-colors ease-in-out hover:text-sky-500 hover:bg-neutral-800">
                    <BiMessageAdd className="w-6 h-6"/>
                </button>
            </div>
        </div> 
        <div className="drawer-side z-40">
            <label htmlFor="my-drawer-3" aria-label="close sidebar" className="drawer-overlay"></label> 
            <ul className="menu p-4 w-80 min-h-full bg-neutral-800 flex flex-col justify-between">
                <div className="chat-wrapper w-full flex flex-col gap-4">
                    <div className="flex w-full justify-between">
                        <label htmlFor="my-drawer-3" aria-label="close sidebar" className="btn btn-square btn-ghost border border-neutral-700 active:bg-neutral-900">    
                            <BsJustifyLeft className="w-6 h-6" />
                        </label>
                        <button type="button" onClick={() => newChat()} className="btn btn-square btn-ghost border border-neutral-700 active:bg-neutral-900 active:text-sky-500">
                            <BiMessageAdd className="w-6 h-6" />
                        </button>
                    </div>
                    {chatlist.slice(0).reverse().map((list: any) => {
                        return (<li key={list.id} onClick={() => loadChat(list.id)} className="w-full rounded-md border border-neutral-700 active:bg-neutral-900"><span className="w-full line-clamp-1 leading-loose h-10 p-2">{list.title}</span></li>)
                    })}
                </div>
                <button type="button" onClick={() => logout()} className="px-3 py-3 w-full rounded-md border border-neutral-700 active:bg-neutral-900 text-white transition-colors ease-in-out active:text-rose-500 hover:bg-neutral-800 active:border-neutral-900 flex items-center justify-between text-sm">
                    Sign Out
                    <FiPower/>
                </button>
            </ul>
        </div>
    </div>    
    </>
}

export default Navbar;