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
<div id="preloader">
    <div class="spinner"></div>
</div>
@include('nav.index_nav')

<header></header>
@if(session('success'))
    <div id="success-message" class="alert alert-secondary" role="alert">
        {{ session('success') }}
    </div>
@endif
<section class="content">
    <div class="container">

        <div class="content_content">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>
</section>

</body>
</html>
