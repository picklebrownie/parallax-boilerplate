<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <header>
                @include('includes.header')
            </header>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                @yield('content')
                <footer>
                    @include('includes.footer')
                </footer>
            </div>
        </div>
    </body>
</html>