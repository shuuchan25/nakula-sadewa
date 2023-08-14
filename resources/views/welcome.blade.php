<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portofolio</title>

    <!-- Scripts -->
    {{-- <link href="js/script.js" rel="stylesheet"> --}}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    {{-- Swiper --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9.4.0/modules/scrollbar/scrollbar.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Google Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet"> --}}

    <!-- web icon -->
    {{-- <link rel="icon" href="img/logo2.png" type="img/x-icon" /> --}}

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @yield('script-head')
</head>

<body class="">

    <div class="">
        @yield('content')
    </div>


    @yield('script-body')
    <script src="js/script.js"></script>

    {{-- swiper js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>
