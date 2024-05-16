@extends('layouts.app')

@section('content')
    <div>
        <div class="bg-white dark:bg-gray-900">
            <div class="flex justify-center h-screen">
                <div class="hidden lg:block lg:w-2/3">


                    <div class="flex items-center h-full px-20 bg-white opacity-60">
                        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                            src="{{ asset('images/RNHLOGO.png') }}" alt="">
                        {{--                    <div> --}}
                        {{--                        <h2 class="text-4xl font-bold text-white">RNH</h2> --}}

                        {{--                        <p class="max-w-xl mt-3 text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In autem ipsa, nulla laboriosam dolores, repellendus perferendis libero suscipit nam temporibus molestiae</p> --}}
                        {{--                    </div> --}}
                    </div>
                </div>

                <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6 bg-black">
                    <div class="flex-1">
                        <div class="text-center">
                            <h2 class="text-4xl font-bold text-center text-white dark:text-white">Welcome Back!</h2>

                            <p class="mt-3 text-gray-500 dark:text-gray-300">Please login to access your account</p>
                        </div>

                        <div class="mt-8">
                            <form wire:submit.prevent="onLogin">
                                <div>
                                    <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email
                                        Address</label>
                                    <input type="email" wire:model="email" id="email"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                    @error('email')
                                        <span class="error text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-6">
                                    <div class="flex justify-between mb-2">
                                        <label for="password"
                                            class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                                        <a href="#"
                                            class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot
                                            password?</a>
                                    </div>

                                    <input type="password" wire:model="password" id="password"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                    @error('password')
                                        <span class="error text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-6 px-32">
                                    <button type="submit"
                                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-red-500 rounded-md hover:bg-red-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                        Sign in
                                    </button>
                                </div>

                            </form>

                            <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a
                                    href="{{ url('signup') }}"
                                    class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
