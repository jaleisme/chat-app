import { FiPower, FiMessageCircle } from "react-icons/fi"
import { useNavigate } from "react-router-dom";
import { signOut } from "firebase/auth";
import { auth } from "../lib/firebase.lib";
import Chat from "./Chat";

const Home = () => {
    const navigate = useNavigate();
    const logout = async () => {
        navigate('/login');
        await signOut(auth);
    }

    return <div className="flex h-screen bg-slate-800 text-white">
        {/* Navigation */}
        <div className="flex flex-col bg-slate-900 px-2 py-4 gap-4 justify-between">
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
        <div className="w-96 flex flex-col border border-r-2 border-slate-900 px-4 py-6">
            Ini list chat
        </div>
        <div className="flex-1">
            <Chat/>
        </div>
    </div>
}

export default Home;