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
                <form id="loginForm" action="/login" method="post">
                    @csrf
                    <div class="grid gap-6">
                        <div class="mt-6">
                            <label for="email" class="block mb-2 text-xl font-medium font-bold">Email</label>
                            <input type="text" id="email" name="email"
                                class="bg-[#d9d9d9] text-sm rounded-lg focus:ring-[#193969] focus:border-[#193969] block w-full p-2.5"
                                required />
                        </div>
                        <div id="divPassword">
                            <label for="password" class="block mb-2 text-xl font-medium font-bold">Password</label>
                            <input type="password" id="password" name="password"
                                class="bg-[#d9d9d9] text-sm rounded-lg focus:ring-[#193969] focus:border-[#193969] block w-full p-2.5"
                                required />
                            <div class="flex justify-end"><a href="" class="text-[#193969] font-bold">Forgot
                                    Password</a></div>
                            <p id="textError" class="text-red-600 font-bold" style="display: hidden"></p>
                        </div>
                        <div class="flex items-start mb-3">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" name="remember"
                                    class="w-4 h-4 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"/>
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Remember me</label>
                        </div>
                        @if($errors->login)
                            @foreach($errors->login->get('email') as $msg)
                                <p id="textError" class="text-red-600 font-bold">{{ $msg }}</p>
                            @endforeach
                        @endif
                        <div class="flex flex-col justify-center items-center">
                            <button type="submit"
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
</body>

</html>
