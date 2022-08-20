<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('head')
</head>
<body class="skin-orange">
<header class="primary">
 @include('header')
</header>

@yield('content')

<!-- Start footer -->
@include('footer')
<!-- End Footer -->

<!-- JS -->
@include('foot')

{{--    <script src="js/jquery.js"></script>--}}
{{--    <script src="js/jquery.migrate.js"></script>--}}
{{--    <script src="scripts/bootstrap/bootstrap.min.js"></script>--}}
{{--    <script src="scripts/jquery-number/jquery.number.min.js"></script>--}}
{{--    <script src="scripts/owlcarousel/dist/owl.carousel.min.js"></script>--}}
{{--    <script src="scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>--}}
{{--    <script src="scripts/easescroll/jquery.easeScroll.js"></script>--}}
{{--    <script src="scripts/sweetalert/dist/sweetalert.min.js"></script>--}}
{{--    <script src="scripts/toast/jquery.toast.min.js"></script>--}}
{{--    <script src="js/demo.js"></script>--}}
{{--    <script src="js/e-magz.js"></script>--}}
{{--    </body>--}}
</html>
