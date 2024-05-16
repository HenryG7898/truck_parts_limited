<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
   
</head>
<body>
<header class="shadow-sm bg-black mb-30 ">
    <div class="max-w-screen-xl p-5 mx-auto">
        <div class="flex items-center justify-between space-x-4 lg:space-x-10">
            <div class=" flex -mt-4 lg:w-0 lg:flex-1">
                <span class="w-20 h-10  rounded-lg">
                    <img class="-mb-4"
                     src="{{ asset('images/RNHLOGO.png') }}" alt="">
                </span>
            </div>
            @auth
                <nav class="hidden space-x-8 text-sm font-medium md:flex">
                    <a class="text-gray-500 hover:text-white" href="{{ url('dashboard') }}">Home</a>
                    <a class="text-gray-500 hover:text-white" href="">About</a>
                    <a class="text-gray-500 hover:text-white" href="{{ url('buy-parts') }}">Buy</a>
                    <a class="text-gray-500 hover:text-white" href="">Account</a>
                    <a class="text-gray-500 hover:text-white" href="">Contact</a>
                </nav>

                <div class="items-center justify-end flex-1 hidden space-x-4 sm:flex">
                    <form action="{{ url('logout') }}" method="post">
                        @csrf
                        <button
                            class="px-5 py-2 text-sm font-medium text-white bg-red-600 rounded-lg"
                        >
                            Logout
                        </button>
                    </form>

                </div>
            @endauth
            @guest
                <div class="items-center justify-end flex-1 hidden space-x-4 sm:flex">
                    <a
                        class="px-5 py-2 text-sm font-medium text-white bg-red-600 rounded-lg"
                        href="{{ url('login') }}"
                    >
                        Log in
                    </a>

                    <a
                        class="px-5 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg"
                        href="{{ url('signup') }}"
                    >
                        Sign up
                    </a>
                </div>
            @endguest



            <div class="lg:hidden">
                <button class="p-2 text-gray-600 bg-gray-100 rounded-lg" type="button">
                    <span class="sr-only">Open menu</span>
                    <svg
                        aria-hidden="true"
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M4 6h16M4 12h16M4 18h16"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>


{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

</body>
</html>
