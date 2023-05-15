<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
         <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Scripts -->
         @vite(['resources/css/app.css', /* 'resources/js/app.js' */'resources/css/style.css','resources/css/bootstrap.min.css'])
        <!-- Customized Bootstrap Stylesheet -->
    <link href="public/resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/resources/css/style.css" rel="stylesheet">
    </head>
    <body >
        
            
            <div class="container-xxl position-relative bg-white d-flex p-0">
                {{ $slot }}
            </div>
        
    </body>
</html>
