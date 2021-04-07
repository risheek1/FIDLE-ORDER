import firebase from "firebase/app";
 var firebaseConfig = {
    apiKey: "AIzaSyB_gHiZGaZnHVjlOIvjTz4ftIRcYhZFEsI",
    authDomain: "fidle-explore.firebaseapp.com",
    databaseURL: "https://fidle-explore-default-rtdb.firebaseio.com",
    projectId: "fidle-explore",
    storageBucket: "fidle-explore.appspot.com",
    messagingSenderId: "981026673787",
    appId: "1:981026673787:web:79274213f179298edabede",
    measurementId: "G-0XHRHPF4RE"
  };
firebase.initializeApp(firebaseConfig);
export default firebase;