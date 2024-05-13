<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memoir | Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-[100%] flex h-screen">
        <div class="w-[50%] bg-[#f9f9f9]">
            <div class="image flex justify-center items-center p-5 mt-5">
                <img src="{{ asset('src/logo/logo-black.png') }}" alt="" class="w-[200px]">
            </div>
            <div class="form w-[80%] m-auto p-5">
                <h1 class="text-5xl font-bold">Login</h1>
                <form id="loginForm">
                    @csrf
                    <div class="grid gap-6">
                        <div class="mt-6">
                            <label for="email" class="block mb-2 text-xl font-medium font-bold">Email</label>
                            <input type="text" id="email"
                                class="bg-[#d9d9d9] text-sm rounded-lg focus:ring-[#193969] focus:border-[#193969] block w-full p-2.5"
                                required />
                        </div>
                        <div id="divPassword">
                            <label for="password" class="block mb-2 text-xl font-medium font-bold">Password</label>
                            <input type="password" id="password"
                                class="bg-[#d9d9d9] text-sm rounded-lg focus:ring-[#193969] focus:border-[#193969] block w-full p-2.5"
                                required />
                            <div class="flex justify-end"><a href="" class="text-[#193969] font-bold">Forgot
                                    Password</a></div>
                            <p id="textError" class="text-red-600 font-bold" style="display: hidden"></p>
                        </div>
                        <div class="flex items-start mb-3">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value=""
                                    class="w-4 h-4 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                    required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                agree
                                with the <a href="#"
                                    class="text-blue-600 hover:underline dark:text-blue-500">terms
                                    and conditions</a>.</label>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <button type="submit" name="submit"
                                class="w-[80%] text-white bg-[#193969] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Login</button>
                            <p class="font-bold">Don't have an account? <a href="/register"
                                    class="text-[#193969] hover:text-blue-800">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-[50%] flex flex-col justify-center items-center bg-[#193969] text-white">
            <div class="w-max">
                <img src="{{ asset('src/img/pana.png') }}" alt="">
            </div>
            <div class="w-[60%] mt-10">
                <p class="font-bold tracking-widest font-roboto">JOURNEY THROUGH YOUR MEMOIR. SIGN IN TO EXPLORE YOUR
                    PERSONAL
                    REFLECTIONS.</p>
            </div>
        </div>
    </div>

    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-app.js";
        import {
            getDatabase,
            get,
            ref,
            child
        } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-database.js";
        import {
            getAuth,
            signInWithEmailAndPassword
        } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-auth.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyBPu5uEahrPRhWb-2YfDcx_q-VnQ_V71Co",
            authDomain: "memoir-unsika.firebaseapp.com",
            projectId: "memoir-unsika",
            storageBucket: "memoir-unsika.appspot.com",
            messagingSenderId: "228249324406",
            appId: "1:228249324406:web:b3a3550bc9882481354857",
            measurementId: "G-WD353SZ0WZ",
            databaseURL: "https://memoir-unsika-default-rtdb.asia-southeast1.firebasedatabase.app/"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const db = getDatabase(app);
        const dbref = ref(db);
        const auth = getAuth(app);
        const analytics = getAnalytics(app);

        let email = document.getElementById('email');
        let password = document.getElementById('password');
        let loginForm = document.getElementById('loginForm');
        let divPassword = document.getElementById('divPassword');
        let textError = document.getElementById('textError');
        let errorMessage = '';

        let signInUser = evt => {
            evt.preventDefault();
            signInWithEmailAndPassword(auth, email.value, password.value).then((credentials) => {
                get(child(dbref, 'UserAuthList/' + credentials.user.uid)).then((snapshot) => {
                    if (snapshot.exists) {
                        sessionStorage.setItem("user-info", JSON.stringify({
                            username: snapshot.val().username,
                            email: snapshot.val().email
                        }))
                        sessionStorage.setItem("user-creds", JSON.stringify(credentials.user));
                        window.location.replace('./home');
                    }
                })
            }).catch((error) => {
                console.log(error.message);
                if (error.message == 'Firebase: Error (auth/invalid-credential).') {
                    errorMessage =
                        'Email atau password anda salah!'; // Assuming error.message contains the error message
                }
                textError.textContent =
                    errorMessage; // Set the text content of the paragraph element to the error message
                document.getElementById('divPassword').appendChild(
                    textError); // Append the paragraph element to the divConfirmPassword div
            })
        }

        loginForm.addEventListener('submit', signInUser);
    </script>
</body>

</html>
