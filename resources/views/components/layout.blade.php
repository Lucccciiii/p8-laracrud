<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Your Company Inc</title>
</head>
<body class="h-full m-0">
<nav class="flex items-center justify-between flex-row">
    <ul class="flex mr-7 ml-5 justify-between">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/employees')}}">Employees</a></li>
        <li><a href="{{url('/admin')}}">Admin</a></li>
        <li><a href="{{url('/contact')}}">Contact</a></li>
    </ul>
</nav>
{{ $slot }}
<footer class="bg-gray-500 bottom-0 h-24">
    <ul class="flex flex-row justify-between">
        <li><a href="{{url('/')}}">Social 1</a></li>
        <li><a href="{{url('/')}}">Social 2</a></li>
        <li><a href="{{url('/')}}">Social 3</a></li>
        <li><form action="{{url('posts/$post-id')}}">
                <p>Want to give Feedback?</p>
                <label for="email"></label>
                <input type="text">
            </form></li>
    </ul>
    <p>Copyright 2024 by Luc Stolk All Rights Reserved</p>
</footer>
</body>
</html>
