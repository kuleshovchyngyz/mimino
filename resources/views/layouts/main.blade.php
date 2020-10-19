<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
    </head>
    <body>
    <div id="app">
        <div class="container is-fluid pl-0 pr-0 is-size-6 main-container">
            @include('layouts.navigation')
            @yield('sub-navigation')
            @include('layouts.message')
            <div class="container content-container my-5">

                <flash-message></flash-message>

                <loader :is-visible="isLoading"></loader>
                <div class="columns">
                    @yield('sidebar')
                    @yield('content')
                </div>
            </div>
            @include('layouts.footer')
            @include('shared.modal')
        </div>
    </div>
    </body>
</html>
