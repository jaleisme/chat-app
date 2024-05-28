import { Link } from "react-router-dom";

const Verify = () => {
    return <div className="flex flex-col h-screen justify-center items-center">
        <h1 className="text-2xl font-bold">Oops! Your account hasn&apos;t been verified!</h1>
        <span className="text-center w-100">Check your email inbox for verification email.<br/><Link className="text-primary font-semibold" to="/login">Back to Sign In</Link></span>
    </div>
}

export default Verify;