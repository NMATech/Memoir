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
                <form id="registForm" action="/register" method="post">
                    @csrf
                    <div class="grid gap-6">
                        <div class="mt-4">
                            <label for="username" class="block text-xl font-medium font-bold">Username</label>
                            <input type="text" id="name" name="name"
                                class="bg-[#d9d9d9] text-sm rounded-lg focus:ring-[#193969] focus:border-[#193969] block w-full p-2.5"
                                required />
                            @if ($errors->register->has('name'))
                                @foreach ($errors->register->get('name') as $msg)
                                    <p id="textError" class="text-red-600 font-bold">{{ $msg }}</p>
                                @endforeach
                            @endif
                        </div>
                        <div class="">
                            <label for="email" class="block text-xl font-medium font-bold">Email</label>
                            <input type="email" id="email" name="email"
                                class="bg-[#d9d9d9] text-sm rounded-lg focus:ring-[#193969] focus:border-[#193969] block w-full p-2.5"
                                required />
                            @if ($errors->register->has('email'))
                                @foreach ($errors->register->get('email') as $msg)
                                    <p id="textError" class="text-red-600 font-bold">{{ $msg }}</p>
                                @endforeach
                            @endif
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
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="bg-[#d9d9d9] text-sm rounded-lg focus:ring-[#193969] focus:border-[#193969] block w-full p-2.5"
                                required />
                            @if ($errors->register->has('password'))
                                @foreach ($errors->register->get('password') as $msg)
                                    <p id="textError" class="text-red-600 font-bold">{{ $msg }}</p>
                                @endforeach
                            @endif
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
</body>
</html>