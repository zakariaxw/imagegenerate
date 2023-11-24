<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
        <link rel="icon" href="{{ asset('home/img/favicon.ico') }}" sizes="any">
        <link rel="icon" href="{{ asset('home/img/favicon/icon.svg') }}" type="image/svg+xml">
        <link rel="apple-touch-icon" href="{{ asset('home/img/favicon/apple-touch-icon.png') }}">
        <link rel="manifest" href="{{ asset('home/img/favicon/manifest.webmanifest') }}">
        <meta name="description" content="Unio - colorful and stylish coming soon & landing page template to kick-start your project">
        <meta name="keywords" content="mix_design, coming soon, under construction, template, landing page, portfolio, one page, responsive, html5, css3, creative, clean, agency, personal page">
        <meta name="author" content="mix_design">

    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:title" content="Laravel OpenAI">
    <meta property="og:description" content="Generate Your Picture">
    <meta property="og:url" content="http://mixdesign.club/themeforest/unio/">
    <meta property="og:image" content="http://mixdesign.club/themeforest/unio/favicon/og-image.jpg">
    <!-- Facebook Metadata End -->

    <!-- Template Styles Start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/loaders/loader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/main.css') }}">
    <!-- Template Styles End -->

    <!-- Custom Browser Color Start -->
    <meta name="theme-color" content="#fc466b">
    <meta name="msapplication-navbutton-color" content="#fc466b">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fc466b">
        
       
        
        @vite('resources/css/app.css', 'resources/js/app.js')
        <title>Laravel AI </title>


    </head>
    <body>



       
            @yield('content')
    








        <script src="{{ asset('home/js/libs.min.js') }}"></script>
        <script src="{{ asset('home/js/gallery-init.js') }}"></script>
        <script src="{{ asset('home/js/custom.js') }}"></script>
    </body>
</html>
