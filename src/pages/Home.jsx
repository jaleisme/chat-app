import { onAuthStateChanged } from "firebase/auth";
import { auth, firestore } from "../lib/firebase.lib";
import { doc, getDoc } from "firebase/firestore";
import React, { useEffect, useState } from "react";
import Chat from "./Chat";
import Navbar from "../components/Navbar";
import { v4 as uuid } from 'uuid';
import { useNavigate } from "react-router-dom";

const Home = () => {
    const [chatId, setChatId] = React.useState([]);

    useEffect(() => {
        const checkChatId = () => {
            if(localStorage.getItem('chatId')){
                const id = localStorage.getItem('chatId')
                setChatId(id);
            } else {
                setChatId(uuid())
                localStorage.setItem('chatId', chatId)
            }
        }

        checkChatId();
    }, [])

    return <div className="flex flex-col h-screen bg-neutral-900 text-white">
        <Navbar className="z-30" />
        <Chat />
    </div>
}

export default Home;