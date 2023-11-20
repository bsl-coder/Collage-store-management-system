<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>CMT Lab Store Management</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/store.png')}}">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<style>
    h3,h6{
        text-align: center;
        font-size: 20px;
    }

</style>
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active">
<a href="{{route('home')}}" class="logo">
<img style="width: 30%" src="{{asset('assets/img/lab.png')}}" alt="">
</a>
<a id="toggle_btn" href="javascript:void(0);">
</a>
</div>
<h3 style="color: rgb(255, 51, 0);text-align: center;">Computer Technology Lab Stores</h3>
<h6 style="color: rgb(5, 197, 197);text-align: center;">Barguna Polytechnic Institute,Barguna</h6>
<h5 class="user-menu p-10" style="margin-top: -90px;padding:50px">
    <a href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
 </a>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
 </form></h5>
</div>
@include('store.stores')

@yield('main')

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets/js/feather.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/plugins/apexchart/chart-data.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
@stack('jq')
</body>
</html>
