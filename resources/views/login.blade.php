@extends('layouts.app')

<!-- Tab title -->
@section('title','Login Page')

@Section('content')


    <div class="flex items-center justify-center px-4 bg-gray-100 p-10">
        <div class="w-full max-w-md bg-white shadow-lg rounded-xl p-8">

            <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">
                Already Have an account?
            </h2>

            <p class="text-center text-gray-500 mb-6">
                Login to continue
            </p>

            <form action="/login" method="POST" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="example@email.com"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="********"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                </div>

                @if (session('error_msg'))

                    <div class="md-4 px-4 py-3 text-red 800 bg-red-200 rounded-md" role="alert">
                        {{session('error_msg')}}
                    </div>


                @endif

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2.5 rounded-lg font-semibold transition duration-300" name="user_login" value="login"
                >
                    Login
                </button>

                <!-- Login Link -->
                <p class="text-center text-sm text-gray-600">
                    Not Uset Yet?
                    <a href="registration"
                       class="text-blue-600 hover:underline font-medium">
                        Register
                    </a>
                </p>

            </form>

        </div>
    </div>

@endsection
