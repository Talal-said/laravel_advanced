<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('asset/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('asset/css/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('asset/css/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/myEdit.css')}}" rel="stylesheet">
    @yield('styles')
</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper" class="menu-toggle">

    @include('layout.navHeader')
    @include('layout.sidebar')

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body" id="content-body" style="min-height: calc(100vh - 58px);">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                @yield('mainWorkspace')
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

    @include('layout.footer')

</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->



<!-- Required vendors -->
<script src="{{asset('asset/css/vendor/global/global.min.js')}}"></script>
<script src="{{asset('asset/js/quixnav-init.js')}}"></script>
<script src="{{asset('asset/js/custom.min.js')}}"></script>


<!-- Vectormap -->
<script src="{{asset('asset/css/vendor/raphael/raphael.min.js')}}"></script>
{{--<script src="{{asset('css/vendor/morris/morris.min.js')}}"></script> for graphics--}}


<script src="{{asset('asset/css/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('asset/css/vendor/chart.js/Chart.bundle.min.js')}}"></script>

<script src="{{asset('asset/css/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

<!--  flot-chart js -->
<script src="{{asset('asset/css/vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('asset/css/vendor/flot/jquery.flot.resize.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{asset('asset/css/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>


<!-- Counter Up -->
<script src="{{asset('asset/css/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
<script src="{{asset('asset/css/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('asset/css/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
{{--<script src="{{asset('js/dashboard/dashboard-1.js')}}"></script> for graphics--}}
<script src="{{asset('asset/js/dashboard/myEdit.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
@yield('scripts')

</body>

</html>
