<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SUMAG | DAMA NELSI</title>
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

        <!-- Slider Range CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/range-slider/slider-range.css')}}" />

        <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        <!-- LOGO SUMAG -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo-sumag-damanelsin10.png')}}" >

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    </head>
    <body >
        <x-jet-banner />

            @livewire('plantilla-navegacion')
            
            <main class="main">

                {{ $slot }}
                
            </main>

            @stack('modals')
            @livewire('plantilla-footer')

            @livewireScripts
            <!-- jQuery -->
            <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

            <!-- Bootstrap Core JS -->
            <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

            <!-- Slick JS -->
            <script src="{{asset('assets/plugins/slick/slick.js')}}"></script>

            <!-- Wow JS -->
            <script src="{{asset('assets/js/wow.js')}}"></script>

            <!-- Select2 JS -->
            <script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>

            <!-- Scrollup JS -->
            <script src="{{asset('assets/js/scrollup.js')}}"></script>

            <!-- Sidebar JS -->
            <script src="{{asset('assets/plugins/theia-sticky-sidebar/jquery.theia.sticky.js')}}"></script>

            <!-- Elevatezoom JS -->
            <script src="{{asset('assets/js/jquery.elevatezoom.js')}}"></script>

            <!-- Scrollbar JS -->
            <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

            <!-- Waypoints JS -->
            <script src="{{asset('assets/js/waypoints.js')}}"></script>

            <!-- Slider Rrange  JS -->
            <script src="{{asset('assets/plugins/range-slider/slider-range.js')}}"></script>

            <!-- Shop JS -->
            <script src="{{asset('assets/js/shop.js')}}"></script>

            <!-- Custom JS -->
            <script src="{{asset('assets/js/script.js')}}"></script>
            
    </body>
</html>
