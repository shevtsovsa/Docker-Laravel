<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->


    <title>@yield('title')</title>

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
    <!-- FancyBox -->
    <link rel="stylesheet" href="{{ asset('plugins/fancybox/jquery.fancybox.min.css') }}">
    <!-- Bootstrap -->
  {{--  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">--}}
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Material Design Bootstrap -->
  {{--  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">--}}
    <!-- Your custom styles (optional) -->
   {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('main.header')

    <div class="page-wrapper">
        @yield('content')
    </div>

    @include('main.footer')

</div>
<script type="text/javascript" src="{{ asset('plugins/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-select.min.js') }}"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<!-- FancyBox -->
<script type="text/javascript" src="{{ asset('plugins/fancybox/jquery.fancybox.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script type="text/javascript" src="{{ asset('plugins/google-map/gmap.j') }}"></script>

<script type="text/javascript" src="{{ asset('plugins/validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/wow.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/timePicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<!-- Bootstrap  -->
{{--<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();
</script>
@yield('scripts')
</body>


</html>
