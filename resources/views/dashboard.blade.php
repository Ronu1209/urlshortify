<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-x1 shadow-md w-full max-w-xl text-center">

        <h2 class="text-teal-700 font-bold text-4xl mb-4">{{$sess_user[0]->user_email}}</h2>

        <h1 class="text-teal-700 font-bold text-4xl mb-4">Laravel URL Shortner</h1>


        <form class="flex items-center justify-center space-x-2">
            <input type="text" name="org-url" class="w-full border-2 border-teal-400 px-4 py-2 rounded-xl focus:ring-2 focus:ring-teal-600">

            <input type="button" value="Create" class="bg-teal-800 text-white rounded-lg px-4 py-2">
        </form>

        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2.5 px-10 rounded-lg font-semibold transition duration-300" name="user_login" value="login">
            <a href="/logout" class="text-center">Logout</a>
        </button>


    </div>
</body>
</html>
