<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Start Meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Plural Descuentos">
        <meta name="keywords" content="Descuentos, Tarjeta, Comercios, usuarios, promociones">
        <meta name="author" content="RaitNau Digital">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- TITULO DEL SITIO -->
        <title>Plural descuentos</title>
        <!-- Favicons -->
        <link rel="icon" type="image/png" href="assets/img/favicon/favicon.ico">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="assets/css/all.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Swiper Bundle CSS -->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Mean Menu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/sass/style.css">
    </head>

    <body>
        @include('partials.preloader')
        @include('partials.darkmode')
        @include('partials.topbar')
        @include('partials.header')
        @yield('content')
        @include('partials.footertop')
        @include('partials.footer')
        @include('partials.scrollbutton')
        @include('partials.scripts')
    </body>
</html>
