<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/14987f190e.js" crossorigin="anonymous"></script>
    <title>TodoList</title>
</head>
<body class="">
    @yield('top-bar')
    @yield('content')
</body>
</html>