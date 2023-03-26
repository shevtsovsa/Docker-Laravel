<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->


    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('arm/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('arm/vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('arm/vendors/datatables.net-bs4/dataTables.bootstrap4.cs') }}">
    <link rel="stylesheet" href="{{ asset('arm/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('arm/css/preloader.css') }}">
    <!-- Material Design Bootstrap -->
    {{--  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">--}}
    <!-- Your custom styles (optional) -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="shortcut icon" href="{{ asset('arm/images/favicon.png') }}">
<body>
<div id="app">
    @include('arm.main.header')

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            @include('arm.main.nav')
            <div id="preloader">
                <div class="preloader-5"></div>
            </div>
            @yield('content')
        </div>
    </div>

    @include('arm.main.footer')

</div>
<script type="text/javascript" src="{{ asset('arm/vendors/base/vendor.bundle.base.js') }}"></script>
<script type="text/javascript" src="{{ asset('arm/vendors/chart.js/Chart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('arm/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('arm/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script type="text/javascript" src="{{ asset('arm/js/off-canvas.js') }}"></script>
<script type="text/javascript" src="{{ asset('arm/js/hoverable-collapse.js') }}"></script>
<script type="text/javascript" src="{{ asset('arm/js/template.js') }}"></script>
<script type="text/javascript" src="{{ asset('arm/js/dashboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('arm/js/data-table.js') }}"></script>
<script type="text/javascript" src="{{ asset('arm/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('arm/js/dataTables.bootstrap4.js') }}"></script>
{{-- Add wysiwyg script --}}
<script src="{!! asset('modules/summernote/summernote.js') !!}"></script>

{{-- Include summernote-ru-RU --}}
<script src="{!! asset('modules/summernote/lang/summernote-ru-RU.js') !!}"></script>

{{-- Include editor settings file for users --}}
<script src="{!! asset('arm/js/summernote_editor_settings.js') !!}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();
</script>
@yield('scripts')
</body>
<script>
    window.onload = function() {
        let preloader = document.getElementById('preloader');
        preloader.classList.add('hide-preloader');
        setInterval(function() {
            preloader.classList.add('preloader-hidden');
        }, 990);
    }
</script>

</html>
