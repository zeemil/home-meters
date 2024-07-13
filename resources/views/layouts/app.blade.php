<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       
        <title>Home Meters > @yield('title')</title>
        @livewireStyles
    </head>
    <body>

    @section('sidebar')
        This is the master sidebar.
    @show

    <div class="container">
        @yield('content')
    </div>
    
    @livewireScripts
    </body>
</html>
