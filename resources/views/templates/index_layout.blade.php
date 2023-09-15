<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <title>@yield('title') - Блог 2.0</title>
    @vite('resources/js/app.js')
</head>
<body>
    @yield('content')
</body>
</html>
