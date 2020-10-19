<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
    </head>
    <body>
    <div id="app">
        @include('layouts.navigation')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
