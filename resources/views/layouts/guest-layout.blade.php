<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- HEAD PART --}}
        @include('layouts.partials.head-assets')
    </head>
    <body>
        
         @yield('main-content')

        {{-- BOOTSTRAP AND LAYOUT --}}
        @include('layouts.partials.body-assets')
    </body>
</html>
