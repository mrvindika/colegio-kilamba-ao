<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- HEAD PART --}}
        @include('layouts.partials.head-assets')
    </head>
    <body>
        {{-- CONTAINER SCROLLER --}}
        <div class="container-scroller">
            {{-- NAVBAR --}}
            @include('layouts.partials.navbar-part')
            
            {{-- CONTAINER FLUID --}}
            <div class="container-fluid page-body-wrapper">                                                                                                                                                                                                                
                {{-- SIDEBAR --}}
                @include('layouts.partials.sidebar-part')
                
                {{-- MAIN PANEL --}}
                @yield('main-panel')
            </div>
        </div>
        
        {{-- BOOTSTRAP AND LAYOUT --}}
        @include('layouts.partials.body-assets')
    </body>
</html>
