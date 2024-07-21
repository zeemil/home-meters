<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       
        <title>Home Meters @yield('title')</title>
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <div>
        <a href="/">{{__('Home')}}</a>
    </div>

    <div class="mt-20 ml-10">
        @yield('content')
    </div>
    
    @livewireScripts
    </body>
</html>
