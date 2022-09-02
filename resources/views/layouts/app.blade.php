<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <link href="resources/css/app.css" rel="stylesheet">--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

{{--    tempalte--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <script src="{{ asset('public/template/plugins/fontawesome-free/css/all.min.css') }}" defer></script>
    <!-- Theme style -->
    <script src="{{ asset('public/template/dist/css/adminlte.min.css') }}" defer></script>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Logs Api Laravel
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ 'Đăng nhập' }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src= {{URL::asset('public/template/lib/chart/chart.min.js')}}></script>
<script src= {{URL::asset('public/template/lib/easing/easing.min.js')}}></script>
<script src= {{URL::asset('public/template/lib/waypoints/waypoints.min.js')}}></script>
<script src= {{URL::asset('public/template/lib/owlcarousel/owl.carousel.min.js')}}></script>
<script src= {{URL::asset('public/template/lib/tempusdominus/js/moment.min.js')}}></script>
<script src= {{URL::asset('public/template/lib/tempusdominus/js/moment-timezone.min.js')}}></script>
<script src= {{URL::asset('public/template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}></script>
{{--<script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>--}}
<script type="text/javascript" src= {{URL::asset('public/ckeditor/ckeditor.js')}} ></script>
<script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function (){
        CKEDITOR.replace('ckeditor_shortdesc');
        CKEDITOR.replace('ckeditor_desc');

    })
</script>
{{--<script src="template/lib/chart/chart.min.js"></script>--}}
{{--<script src="template/lib/easing/easing.min.js"></script>--}}
{{--<script src="template/lib/waypoints/waypoints.min.js"></script>--}}
{{--<script src="template/lib/owlcarousel/owl.carousel.min.js"></script>--}}
{{--<script src="template/lib/tempusdominus/js/moment.min.js"></script>--}}
{{--<script src="template/lib/tempusdominus/js/moment-timezone.min.js"></script>--}}
{{--<script src="template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>--}}

<!-- Template Javascript -->

<!-- jQuery -->
<script src= {{URL::asset('public/template/plugins/jquery/jquery.min.js')}}></script>
<!-- Bootstrap 4 -->
<script src= {{URL::asset('public/template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>

<!-- bs-custom-file-input -->
<script src= {{URL::asset('public/template/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}></script>

<!-- AdminLTE App -->
<script src= {{URL::asset('public/template/dist/js/adminlte.min.js')}}></script>

<!-- AdminLTE for demo purposes -->
<script src= {{URL::asset('public/template/dist/js/demo.js')}}></script>

<script src="js/main.js"></script>
</html>
