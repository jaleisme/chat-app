import { Link } from "react-router-dom";
import { auth } from "../lib/firebase.lib";
import { sendEmailVerification } from "firebase/auth";

const Verify = () => {
    const resendEmail = () => {
        // Sending Email Verification
        sendEmailVerification(auth.currentUser).then(() => {
            console.log("Email sent!");
        });
    }


    return <div className="flex flex-col h-screen justify-center items-center bg-slate-800 text-white gap-4">
        <div className="flex flex-col gap-2">
            <h1 className="text-2xl font-bold">Oops! Your account hasn&apos;t been verified!</h1>
            <span className="text-center w-100">Check your email inbox for verification email.</span>
        </div>
        <button className="px-4 py-2 rounded-md border border-sky-500 text-sky-500 font-semibold hover:border-slate-800 hover:text-white hover:bg-sky-500 transition-colors" onClick={resendEmail}>Resend Email</button>
        <span className="text-center text-sm w-100">Done verifying? <Link className="text-sky-500 font-medium" to="/">Take Me Home</Link></span>
    </div>
}

export default Verify;