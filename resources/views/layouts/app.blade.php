<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg==" crossorigin="anonymous" /> --}}

        <!-- Libraries Stylesheet -->
        <link href="resources/js/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="resources/js/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" /> 

       {{--  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script> --}}



        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="sweetalert2/dist/sweetalert2.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        
         <!-- Scripts -->
         @vite(['resources/css/app.css', /* 'resources/js/app.js' */'resources/css/style.css','resources/css/bootstrap.min.css', 'resources/js/main.js', 'resources/js/lib/chart/chart.min.js', 'resources/js/lib/easing/easing.min.js','resources/js/lib/waypoints/waypoints.min.js','resources/js/lib/owlcarousel/owl.carousel.min.js','resources/js/lib/tempusdominus/js/moment.min.js','resources/js/lib/tempusdominus/js/moment-timezone.min.js','resources/js/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js',
         'resources/js/lib/owlcarousel/assets/owl.carousel.min.css',
         'resources/js/tempusdominus/tempusdominus-bootstrap-4.min.css']) 
        <!-- Customized Bootstrap Stylesheet -->
       
       

    <link href="public/resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/resources/css/style.css" rel="stylesheet">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
           {{--  @include('layouts.navigation') --}}

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main class="p-0 bg-white container-xxl position-relative d-flex">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
