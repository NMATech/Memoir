<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memoir | Register</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-[100%] flex h-screen">
        <div class="w-[50%] h-screen flex flex-col justify-center items-center bg-[#193969] text-white">
            <div class="w-max">
                <img src="{{ asset('src/img/pana.png') }}" alt="">
            </div>
            <div class="w-[60%] mt-10">
                <p class="font-bold tracking-widest font-roboto">JOURNEY THROUGH YOUR MEMOIR. SIGN IN TO EXPLORE YOUR
                    PERSONAL
                    REFLECTIONS.</p>
            </div>
        </div>
        <div class="w-[50%] bg-[#f9f9f9]">
            <div class="image flex justify-center items-center p-5 mt-5">
                <img src="{{ asset('src/logo/logo-black.png') }}" alt="" class="w-[200px]">
            </div>
            <div class="form w-[80%] m-auto p-5">
                <h1 class="text-4xl font-bold">Register</h1>
                <form id="registForm">
                    @csrf
                    <div class="grid gap-6">
                        <div class="mt-4">
                            <label for="username" class="block text-xl font-medium font-bold">Username</label>
                            <input type="text" id="username" name="username"
                                class="bg-[#d9d9d9] text-sm rounded-lg focus:ring-[#193969] focus:border-[#193969] block w-full p-2.5"
                                required />
                        </div>
                        <div class="">
                            <label for="email" class="block text-xl font-medium font-bold">Email</label>
                            <input type="email" id="email" name="email"
                                class="bg-[#d9d9d9] text-sm rounded-lg focus:ring-[#193969] focus:border-[#193969] block w-full p-2.5"
                                required />
                        </div>
                        <div>
                            <label for="password" class="block text-xl font-medium font-bold">Password</label>
                            <input type="password" id="password" name="password"
                                class="bg-[#d9d9d9] text-sm rounded-lg focus:ring-[#193969] focus:border-[#193969] block w-full p-2.5"
                                required />
                        </div>
                        <div id="divConfirmPassword">
                            <label for="repassword" class="block text-xl font-medium font-bold">Confirm
                                Password</label>
                            <input type="password" id="repassword" name="repassword"
                                class="bg-[#d9d9d9] text-sm rounded-lg focus:ring-[#193969] focus:border-[#193969] block w-full p-2.5"
                                required />
                            <p id="textError" class="text-red-600 font-bold" style="display: hidden"></p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <button type="submit"
                                class="w-[80%] text-white bg-[#193969] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none"
                                id="btnRegister">Register</button>
                            <p class="font-bold">Have an account? <a href="/"
                                    class="text-[#193969] hover:text-blue-800">Login</a></p>
                        </div>
                    </div>
                </form>
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
            set,
            ref
        } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-database.js";
        import {
            getAuth,
            createUserWithEmailAndPassword
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
        const auth = getAuth(app);
        const analytics = getAnalytics(app);

        let username = document.getElementById('username');
        let email = document.getElementById('email');
        let password = document.getElementById('password');
        let repassword = document.getElementById('repassword');
        let registForm = document.getElementById('registForm');
        let divConfirmPassword = document.getElementById('divConfirmPassword');
        let textError = document.getElementById('textError');

        let RegisterUser = evt => {
            evt.preventDefault();
            createUserWithEmailAndPassword(auth, email.value, password.value).then((credentials) => {
                set(ref(db, 'UserAuthList/' + credentials.user.uid), {
                    username: username.value,
                    email: email.value,
                    potoProfile: "src/img/man.jpg"
                })
                alert('berhasil register');
                window.location.href = "./login"
            }).catch((error) => {
                console.log(error.message);
                let errorMessage = error.message; // Assuming error.message contains the error message
                textError.textContent =
                    errorMessage; // Set the text content of the paragraph element to the error message
                document.getElementById('divConfirmPassword').appendChild(
                    textError); // Append the paragraph element to the divConfirmPassword div
            })
            if (password.value == repassword.value) {} else {
                textError.textContent = "Your password doesn't match with your confirm password";
                document.getElementById('divConfirmPassword').appendChild(
                    textError); // Append the paragraph element to the divConfirmPassword div
            }
        }

        registForm.addEventListener('submit', RegisterUser);
    </script>
</body>

</html>
