<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- x-icon -->
    <link rel="shortcut icon" href="{{ asset('assets/css/favicon.png') }}" type="image/x-icon">

    <!-- Other css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Bizbridge</title>
</head>


<body>
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->



    <!-- ==========Header Section Starts Here========== -->
    @include('component.header')
    <!-- ==========Header Section Ends Here========== -->



    @yield('content')


    <!-- ==========Footer Section Starts Here========== -->
    @include('component.footer')
    <!-- ==========Footer Section Ends Here========== -->







    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-arrow-turn-up"></i></a>
    <!-- scrollToTop ending here -->




    <!-- All Scripts -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/circularProgressBar.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>

</html>
