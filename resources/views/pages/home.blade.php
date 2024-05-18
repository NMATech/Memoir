<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memoir | Home</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center w-full">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="/home" class="flex ms-2 p-3">
                        <img src="{{ asset('src/logo/logo-black.png') }}" class="h-23 md:h-16" alt="Memoir Logo" />
                    </a>
                </div>
                <div class="flex flex-row p-3 items-center justify-end md:justify-between w-[80%]">
                    <div class="ms-5 hidden md:block">
                        <form class="max-w-md mx-auto">
                            <div class="relative">
                                <input type="search" id="default-search"
                                    class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search Account" required />
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="">
                        <ul class="flex gap-2">
                            <li class="hidden md:block">
                                <a href="/user_profile"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="flex-shrink-0 w-[28px] h-[28px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M17 10v1.126c.367.095.714.24 1.032.428l.796-.797 1.415 1.415-.797.796c.188.318.333.665.428 1.032H21v2h-1.126c-.095.367-.24.714-.428 1.032l.797.796-1.415 1.415-.796-.797a3.979 3.979 0 0 1-1.032.428V20h-2v-1.126a3.977 3.977 0 0 1-1.032-.428l-.796.797-1.415-1.415.797-.796A3.975 3.975 0 0 1 12.126 16H11v-2h1.126c.095-.367.24-.714.428-1.032l-.797-.796 1.415-1.415.796.797A3.977 3.977 0 0 1 15 11.126V10h2Zm.406 3.578.016.016c.354.358.574.85.578 1.392v.028a2 2 0 0 1-3.409 1.406l-.01-.012a2 2 0 0 1 2.826-2.83ZM5 8a4 4 0 1 1 7.938.703 7.029 7.029 0 0 0-3.235 3.235A4 4 0 0 1 5 8Zm4.29 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h6.101A6.979 6.979 0 0 1 9 15c0-.695.101-1.366.29-2Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li class="">
                                <button
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                                    onclick="showCard('notification')">
                                    <svg class="flex-shrink-0 w-[28px] h-[28px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
                                    </svg>
                                    <span
                                        class="absolute bg-rose-600 text-white rounded-full ps-1 pr-1 mb-7 ms-4">3</span>
                                </button>
                            </li>
                            <li class="hidden md:block">
                                <a href="#"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="flex-shrink-0 w-[28px] h-[28px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M7.833 2c-.507 0-.98.216-1.318.576A1.92 1.92 0 0 0 6 3.89V21a1 1 0 0 0 1.625.78L12 18.28l4.375 3.5A1 1 0 0 0 18 21V3.889c0-.481-.178-.954-.515-1.313A1.808 1.808 0 0 0 16.167 2H7.833Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Sidebar --}}
    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 mt-8 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-[28px] h-[28px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ms-3">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-[28px] h-[28px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2a1 1 0 0 1 .932.638l7 18a1 1 0 0 1-1.326 1.281L13 19.517V13a1 1 0 1 0-2 0v6.517l-5.606 2.402a1 1 0 0 1-1.326-1.281l7-18A1 1 0 0 1 12 2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">For Your Page</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-[28px] h-[28px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Video</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-[28px] h-[28px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                        </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Create</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img src="{{ asset('src/img/man.jpg') }}" alt="" class="w-[30px] rounded-full">

                        <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    {{-- Sidebar End --}}

    {{-- Content --}}
    <div class="p-4 mt-5 sm:ml-64">
        <div class="flex flex-col p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="mt-4">
                <h1 class="font-bold text-2xl">Stories</h1>
            </div>
            <div class="flex gap-3">
                {{-- Stories --}}
                <div class="pt-2">
                    <div class="flex relative w-[150px] h-[200px] bg-gray-500 border border-black rounded-lg">
                        <div
                            class="flex h-full justify-center items-center bg-white items-center gap-[3px] p-2 absolute bottom-0 w-[100%]">
                            <div class="w-[50px] h-[50px] rounded-full">
                                <img src="{{ asset('src/img/adam.jpeg') }}" alt=""
                                    class="w-[100%] h-[100%] object-cover rounded-full">
                            </div>
                            <div
                                class="bg-gray-600 flex opacity-[5px] justify-center items-center absolute w-[50px] h-[50px] rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="flex relative w-[150px] h-[200px]">
                        <img src="{{ asset('src/img/womanImage.jpg') }}" alt=""
                            class="w-[100%] h-[100%] object-cover rounded-lg">
                        <div class="flex justify-center items-center gap-[3px] p-2 absolute bottom-0 w-[100%]">
                            <div class="w-[30px] h-[30px] rounded-full">
                                <img src="{{ asset('src/img/adam.jpeg') }}" alt=""
                                    class="w-[100%] h-[100%] object-cover rounded-full">
                            </div>
                            <div class="bg-white/50 backdrop-blur-sm p-1 rounded-full">
                                <h1 class="font-bold text-md">adamNgawir</h1>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Stories End --}}
            </div>

            {{-- Post --}}
            <div>
                <div class="mt-3">
                    <h1 class="font-bold text-2xl">Recent Post</h1>
                </div>
                <div class="pt-2">
                    <div class="w-[620px] shadow-2xl">
                        <div class="flex items-stretch">
                            <img src="{{ asset('src/img/womanImage.jpg') }}" alt=""
                                class="rounded-tl-2xl w-[573px] h-[300px] object-cover">
                            <div class="flex flex-col justify-center items-center gap-[20px] p-2">
                                <div class="flex flex-col justify-center items-center">
                                    <button class="hover:cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-8 h-8 hover:fill-current hover:text-rose-600 text-2xl">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                        </svg>
                                    </button>
                                    <p class="font-semibold text-xs">10</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex justify-around w-[573px]">
                            <div class="flex w-[15%] justify-center rounded-full pt-3">
                                <img src="{{ asset('src/img/cancan.jpeg') }}" alt=""
                                    class="w-[60px] h-[60px] object-cover rounded-full">
                            </div>
                            <div class="w-[85%] p-2">
                                <h1 class="text-xl">bocahSunda</h1>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat aliquid fugit enim
                                    commodi accusamus eius sunt voluptates perferendis earum molestias? At ut, dolor
                                    beatae assumenda totam obcaecati expedita provident cupiditate!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Post End --}}

            {{-- Card friend --}}
            <div class="w-[400px] absolute right-0 p-3 shadow-xl">
                <div class="mt-3 p-2">
                    <h1 class="font-bold text-xl">Friends</h1>
                </div>
                <div class="flex p-2">
                    <div>
                        <img src="{{ asset('src/img/hanip.jpeg') }}" alt=""
                            class="w-[50px] h-[50px] object-cover rounded-full">
                    </div>
                    <div class="ml-5 w-[70%]">
                        <h4 class="text-xl">hanipp</h4>
                        <h4 class="text-md">Current Active</h4>
                    </div>
                    <div class="flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                        </svg>
                    </div>
                </div>
                <div class="flex p-2">
                    <div>
                        <img src="{{ asset('src/img/cancan.jpeg') }}" alt=""
                            class="w-[50px] h-[50px] object-cover rounded-full">
                    </div>
                    <div class="ml-5 w-[70%]">
                        <h4 class="text-xl">bocahSunda</h4>
                        <h4 class="text-md">Current Active</h4>
                    </div>
                    <div class="flex justify-center items-center">
                        <button id="btnDm" onclick="showCard('dm')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex p-2">
                    <div>
                        <img src="{{ asset('src/img/adam.jpeg') }}" alt=""
                            class="w-[50px] h-[50px] object-cover rounded-full">
                    </div>
                    <div class="ml-5 w-[70%]">
                        <h4 class="text-xl">adamNgawir</h4>
                        <h4 class="text-md">Current Active</h4>
                    </div>
                    <div class="flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                        </svg>
                    </div>
                </div>
                <div class="flex p-2">
                    <div>
                        <img src="{{ asset('src/img/akbar.jpeg') }}" alt=""
                            class="w-[50px] h-[50px] object-cover rounded-full">
                    </div>
                    <div class="ml-5 w-[70%]">
                        <h4 class="text-xl">iniakbar</h4>
                        <h4 class="text-md">Current Active</h4>
                    </div>
                    <div class="flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                        </svg>
                    </div>
                </div>
            </div>
            {{-- Card friend end --}}

            {{-- Container dm --}}
            <div class="w-[390px] h-[540px] flex-col fixed bottom-[10px] right-[50px] shadow-xl bg-white"
                id="containerDm" style="display: none; transition: transform 1s ease-out;">
                <div class="flex w-[100%] border border-end">
                    <div class="w-[70%] flex justify-start items-center p-3">
                        <img src="{{ asset('src/img/cancan.jpeg') }}" alt=""
                            class="w-[50px] h-[50px] object-cover rounded-full mr-2">
                        <div>
                            <h1 class="text-xl">bocahSunda</h1>
                            <h1 class="text-md">Recent Active</h1>
                        </div>
                    </div>
                    <div class="flex justify-around items-center p-2">
                        <button class="ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill-current text-[#193969]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                        </button>
                        <button class="ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill-current text-[#193969]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </button>
                        <button class="ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill-current text-[#193969]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </button>
                        <button class="ms-5" onclick="closeCard('dm')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill-current text-[#193969]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="h-[80%] mt-5">
                    <div class="bg-[#D9D9D9] rounded-xl p-2 w-max m-3 ms-4">
                        <h1 class="">Din, papkeun tugas</h1>
                    </div>
                    <div class="bg-[#89b5fa] rounded-xl p-2 w-max m-3 ms-[17em]">
                        <h1>Tf heula 10k</h1>
                    </div>
                </div>
                <div class="flex justify-around items-center p-2">
                    <input type="file" id="fileUpload" style="display:none;" />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-7 h-7 text-[#193969]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-[#193969]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                    </button>
                    <button onclick="closedm()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-[#193969]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </button>
                    <input type="text" class="bg-[#dedede] rounded-full" placeholder=". . .">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-[#193969]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                        </svg>
                    </button>
                </div>
            </div>
            {{-- Container dm end --}}

            {{-- Container notification --}}
            <div class="bg-white w-[500px] h-[500px] absolute bottom-[10px] right-[50px]" id="containerNotif"
                style="display: none;">
                <div>
                    <div class="flex justify-between p-2">
                        <h1 class="font-bold text-[#193969] text-xl ml-2">Notification</h1>
                        <button class="ms-5" onclick="closeCard('notification')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill-current text-[#193969]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2">
                        <button class="bg-white text-[#193969] rounded-full px-[22px] py-[8px]">Read</button>
                        <button class="bg-[#193969] text-white rounded-full px-[22px] py-[8px]">Unread</button>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="flex p-2 justify-between">
                            <h1 class="font-bold text-xl ml-2">New</h1>
                            <h1 class="font-bold text-xl text-[#193969] mr-2">see all</h1>
                        </div>
                        <div>
                            <div class="flex">
                                <div class="p-2 mr-5 ml-3">
                                    <img src="{{ asset('src/img/cancan.jpeg') }}" alt=""
                                        class="w-[50px] h-[50px] rounded-full">
                                </div>
                                <div class="flex flex-col justify-center items-start">
                                    <h1 class="text-lg">bocahSunda posted a thread you might like.</h1>
                                    <h1 class="text-md text-[#193969]">3 hours ago</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex p-2 justify-between">
                            <h1 class="font-bold text-xl ml-2">Previous</h1>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex">
                                <div class="p-2 mr-5 ml-3">
                                    <img src="{{ asset('src/img/womanImage.jpg') }}" alt=""
                                        class="w-[50px] h-[50px] rounded-full object-cover">
                                </div>
                                <div class="flex flex-col justify-center items-start">
                                    <h1 class="text-lg">btr_rachel liked your story</h1>
                                    <h1 class="text-md text-[#193969]">2 days ago</h1>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="p-2 mr-5 ml-3">
                                    <img src="{{ asset('src/img/man.jpg') }}" alt=""
                                        class="w-[50px] h-[50px] rounded-full object-cover">
                                </div>
                                <div class="flex flex-col justify-center items-start">
                                    <h1 class="text-lg">Kim Jong Un started to following you.</h1>
                                    <h1 class="text-md text-[#193969]">1 weeks ago</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Container notification end --}}
        </div>
    </div>
    {{-- Content End --}}

</body>

<script>
    function showCard(x) {
        if (x == "dm") {
            var cardDm = document.getElementById('containerDm');

            cardDm.style.display = 'flex';
            cardDm.addclasslist = 'translate-y-[-100%]'
        } else if (x == "notification") {
            var cardNotif = document.getElementById('containerNotif');

            cardNotif.style.display = 'block';
        }
    }

    function closeCard(x) {
        if (x == "dm") {
            var cardDm = document.getElementById('containerDm');

            cardDm.style.display = 'none';
        } else if (x == "notification") {
            var cardNotif = document.getElementById('containerNotif');

            cardNotif.style.display = 'none';
        }
    }
</script>

</html>
