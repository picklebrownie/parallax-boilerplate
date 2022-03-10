<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
        <link href="{{ asset('css/parallax.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="parallax-wrapper">
            @yield('content')
        </div>
    </body>
</html>