<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Title -->
    <title></title>

    <!-- Favicon icons -->
    <link href="images/favicon.png" rel="shortcut icon">

    <!-- All CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontpage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontpage/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontpage/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontpage/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontpage/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontpage/css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontpage/css/coreNavigation-1.1.3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontpage/css/style.css')}}">
    @yield('style')
    <!-- Color Palette. simple uncomment below link tag if you need any color palette -->
    <!-- <link rel="stylesheet" href="css/switcher/css/red.css"> -->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    @yield('content')

  <!-- JS -->
  <script src="{{asset('assets/frontpage/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/frontpage/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/frontpage/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/frontpage/js/owl.carousel.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYLtelXg0PGjeTiFDtlN7nrH_47buDWo"></script>
    <script src="{{asset('assets/frontpage/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/frontpage/js/daterangepicker.js')}}"></script>
    <script src="{{asset('assets/frontpage/js/isotope.pkgd.js')}}"></script>
    <script src="{{asset('assets/frontpage/js/coreNavigation-1.1.3.min.js')}}"></script>
    <script src="{{asset('assets/frontpage/js/scripts.js')}}"></script>

    @yield('javascript')
</body>

</html>