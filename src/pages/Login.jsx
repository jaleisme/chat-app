import React from "react";
import { onAuthStateChanged, signInWithEmailAndPassword } from "firebase/auth";
import { auth, firestore } from "../lib/firebase.lib";
import { Link, useNavigate } from "react-router-dom";
import { doc, getDoc } from "firebase/firestore";
import { v4 as uuid } from 'uuid';

const Login = () => {
    const navigate = useNavigate();
    const login = async (event) => {
        event.preventDefault()
        const {value: email} = event.target.email;
        const {value: password} = event.target.password;
        if(email && password){
            try {
                await signInWithEmailAndPassword(auth, email, password);
            } catch (error) {
                window.alert(error.message);
            }
        }
    }
    
    const setUserName = async (uid) => {
        const userId = uid;
        const firestoreRef = doc(firestore, 'users/'+userId);
        const snapshot = await getDoc(firestoreRef);
        localStorage.setItem('username', JSON.stringify(snapshot?.data().fullname));
    }

    React.useEffect(() => {
        onAuthStateChanged(auth, async (user) => {
            if(user){
                // if(user.emailVerified == false){
                //     navigate('/verify');
                // }
                // console.log(user)
                localStorage.setItem('user', JSON.stringify(user));
                setUserName(user.uid);
                localStorage.setItem('chatId', uuid())
                return navigate('/');
            }
        })
    }, [navigate])

    return <div className="flex h-screen justify-center items-center">
        <form onSubmit={login} className="max-w-md w-full flex flex-col gap-5 px-6">
            <div className="text-center">
                <div className="font-bold text-3xl text-white">Chat<span className="text-sky-500">PMB</span></div>
            </div>
            <label htmlFor="">
                <input type="email" name="email" className="input input-bordered w-full" placeholder="E-mail" />
            </label>
            <label htmlFor="">
                <input type="password" name="password" className="input input-bordered w-full" placeholder="Password" />
            </label>
            <button type="submit" className="btn btn-md bg-sky-500 w-full text-white text-sm">Sign In</button>
            <span className="text-center w-full text-xs">Already have an account? <Link className="text-sky-500 font-semibold" to="/register">Sign Up</Link></span>
        </form>
    </div>
}

export default Login;