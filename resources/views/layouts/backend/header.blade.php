<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-TFXZJ44"></script>
<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
        var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
        j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5PMDXM6');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'E-commerce') }}</title>
    <link rel="shortcut icon" href="#">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet"http://code.ionicframework.com/1.3.3/css/ionic.min.css">

    <link rel="stylesheet"http://code.ionicframework.com/1.3.3/css/ionic.min.css">

    {{-- <link rel="stylesheet" href="../../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}

    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/sweetalert2/sweetalert2.min.css')}}">

    @yield('css')

    <style>
        .nav-treeview{
            background: #333 !important;
        }

        .errorMessage{
            width: 24%;
            position: absolute; line-height:1.2rem;
            right: 0px; opacity:0.7;
            z-index: 9999;
            padding: 10px 2px 0px 0px !important;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PMDXM6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
          </li>
        </ul>


        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i style="color:red;" class="fas fa-power-off"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
            <a href="{{ route('logout') }}" class="dropdown-item">
               Logout <i style="float: right; padding-top:5px;" class="fas fa-sign-out-alt"></i>
              </a>
            </div>
          </li>
        </ul>
      </nav>
