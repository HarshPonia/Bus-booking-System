// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyCitMZnShvpxHgo1Dxh4QCns4_DN0BzHOc",
    authDomain: "webproject-e2603.firebaseapp.com",
    projectId: "webproject-e2603",
    storageBucket: "webproject-e2603.appspot.com",
    messagingSenderId: "787393459361",
    appId: "1:787393459361:web:bb5c8bd8443a6931a16ce0",
    measurementId: "G-QVKL9LK6QZ"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);