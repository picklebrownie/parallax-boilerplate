<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
        <link href="{{ asset('css/parallax.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900">
        <div class="parallax-wrapper">
            @yield('content')
        </div>
    </body>
</html>