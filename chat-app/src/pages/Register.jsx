import React from "react";
import { auth, firestore } from "../lib/firebase.lib";
import { createUserWithEmailAndPassword, sendEmailVerification, onAuthStateChanged } from "firebase/auth";
import { Link, useNavigate } from "react-router-dom";
import { setDoc, doc } from 'firebase/firestore'

const Register = () => {
    const navigate = useNavigate();
    const register = async (event) => {
        event.preventDefault();
        const {value: fullname} = event.target.fullname;
        const {value: email} = event.target.email;
        const {value: password} = event.target.password;
        if(email && password){
            try {
                // Registering the user to the auth firebase service
                const userCredentials = await createUserWithEmailAndPassword(auth, email, password);
                const {uid} = userCredentials.user;
                const docRef = doc(firestore, 'users', uid);
                await setDoc(docRef, {fullname});

                // Sending Email Verification
                sendEmailVerification(userCredentials.user).then(() => {
                    console.log("Email sent!");
                });
                navigate('/login');
            } catch (error) {
                window.alert(error.message);
            }
        }
    }

    React.useEffect(() => {
        onAuthStateChanged(auth, (user) => {
            if(user){
                navigate('/');
            }
        })
    })

    return <div className="flex h-screen justify-center items-center">
        <form onSubmit={register} className="max-w-md w-full flex flex-col gap-3">
            <div className="text-center">
                <span className="text-3xl font-bold">Chat App</span>
            </div>
            <label htmlFor="">
                <input type="text" name="fullname" className="input input-bordered w-full" placeholder="Full Name" />
            </label>
            <label htmlFor="">
                <input type="email" name="email" className="input input-bordered w-full" placeholder="E-mail" />
            </label>
            <label htmlFor="">
                <input type="password" name="password" className="input input-bordered w-full" placeholder="Password" />
            </label>
            <button type="submit" className="btn btn-primary w-full text-white">Sign Up</button>
            <span className="text-center w-100">Already have an account? <Link className="text-primary font-semibold" to="/login">Sign In instead</Link></span>
        </form>
    </div>
}

export default Register;