import { FiPower, FiMessageCircle } from "react-icons/fi"
import { useNavigate } from "react-router-dom";
import { onAuthStateChanged, signOut } from "firebase/auth";
import { auth, firestore } from "../lib/firebase.lib";
import Chat from "./Chat";
import { doc, getDoc } from "firebase/firestore";
import { useEffect, useState } from "react";

const Home = () => {
    const [user, setUser] = useState({});
    const navigate = useNavigate();

    const logout = async () => {
        navigate('/login');
        await signOut(auth);
    }

    const checkUser = async () => {
        const userId = auth.currentUser.uid;
        const firestoreRef = doc(firestore, 'users', userId);
        const snapshot = await getDoc(firestoreRef);
        setUser(snapshot.data());
     
        if(!auth.currentUser.emailVerified){
            navigate('/verify')
        }
    }

    useEffect(() => {
        onAuthStateChanged(auth, async (user) => {
            if(!user){
                navigate('/login');
            } else {
                checkUser();
            }
        });
        checkUser();
    }, [])

    return <div className="flex h-screen bg-slate-800 text-white">
        {/* Navigation */}
        <div className="hidden lg:flex flex-col bg-slate-900 px-2 py-4 gap-4 justify-between">
            <a href="" className="px-3 py-3 text-xl text-sky-500 bg-slate-800 border-l-2 border-sky-500">
                <FiMessageCircle/>
            </a>
            {/* <a href="" className="px-3 py-3 rounded-md text-xl text-white bg-slate-900 transition-colors ease-in-out hover:text-sky-500 hover:bg-slate-800">
                <FiMessageCircle/>
            </a> */}
            <button type="button" onClick={logout} className="px-3 py-3 rounded-md text-xl text-white bg-slate-900 transition-colors ease-in-out hover:text-rose-500 hover:bg-slate-800">
                <FiPower/>
            </button>
        </div>
        {/* <div className="hidden w-96 lg:flex flex-col border border-r-2 border-slate-900 px-4 py-6">
            Ini list chat
        </div> */}
        <div className="flex-1 h-screen lg:h-full overflow-y-scroll">
            <Chat user={user} />
        </div>
    </div>
}

export default Home;