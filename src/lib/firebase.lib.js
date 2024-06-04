// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import { getAuth, browserLocalPersistence, setPersistence } from "firebase/auth";
import { getFirestore } from "firebase/firestore";
import { getDatabase } from "firebase/database";
import { getStorage } from "firebase/storage";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCUxIqacV3fljb_UZcuzYYtoc2s9yJbU4Q",
  authDomain: "chat-app-14a2e.firebaseapp.com",
  projectId: "chat-app-14a2e",
  storageBucket: "chat-app-14a2e.appspot.com",
  messagingSenderId: "94180554553",
  appId: "1:94180554553:web:79135e03d3ea9984ce5ae8",
  measurementId: "G-F3B95PWR74"
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);
export const analytics = getAnalytics(app);
export const auth = getAuth(app);
export const firestore = getFirestore(app);
export const storage = getStorage(app);
export const database = getDatabase(app, 'https://chat-app-14a2e-default-rtdb.asia-southeast1.firebasedatabase.app');
setPersistence(auth, browserLocalPersistence);