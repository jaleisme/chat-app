import React from "react";
import { onAuthStateChanged, signInWithEmailAndPassword, signOut } from "firebase/auth";
import { auth } from "../lib/firebase.lib";
import { Link, useNavigate } from "react-router-dom";

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
    
    React.useEffect(() => {
        onAuthStateChanged(auth, (user) => {
            if(user){
                if(user.emailVerified){
                    navigate('/verify');
                }
                navigate('/');
            }
        })
    })

    return <div className="flex h-screen justify-center items-center">
        <form onSubmit={login} className="max-w-md w-full flex flex-col gap-3">
            <div className="text-center">
                <span className="text-3xl font-bold">Chat App</span>
            </div>
            <label htmlFor="">
                <input type="email" name="email" className="input input-bordered w-full" placeholder="E-mail" />
            </label>
            <label htmlFor="">
                <input type="password" name="password" className="input input-bordered w-full" placeholder="Password" />
            </label>
            <button type="submit" className="btn btn-primary w-full text-white">Sign In</button>
            <span className="text-center w-100">Already have an account? <Link className="text-primary font-semibold" to="/register">Sign Up</Link></span>
        </form>
    </div>
}

export default Login;