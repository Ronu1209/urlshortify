@extends('layouts.app')

<!-- Tab title -->
@section('title','Registration Page')

@Section('content')

<body class="bg-gray-100">

    <div class="flex items-center justify-center px-4">
        <div class="w-full max-w-md bg-white shadow-lg rounded-xl p-8">

            <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">
                Create Account
            </h2>

            <p class="text-center text-gray-500 mb-6">
                Register to continue
            </p>

            <form action="adduser" method="POST" class="space-y-5">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Username
                    </label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Enter your full name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                </div>

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

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2.5 rounded-lg font-semibold transition duration-300"
                >
                    Register
                </button>

                <!-- Login Link -->
                <p class="text-center text-sm text-gray-600">
                    Already have an account?
                    <a href="/"
                       class="text-blue-600 hover:underline font-medium">
                        Login
                    </a>
                </p>

            </form>

        </div>
    </div>

@endsection
