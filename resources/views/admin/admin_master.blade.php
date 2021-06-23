<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>Blog</title>

  <link rel="icon" href="" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">

  <link rel="stylesheet" href="{{asset('backend/assets/css/argon.css?v=1.2.0')}}" type="text/css">
</head>
       
<body>
  <!-- Sidenav -->
@include('admin.body.sidebar')
  <!-- header -->
  @include('admin.body.header')
    <!-- Page content -->
     
@include('admin.index')
      <!-- Footer -->
@include('admin.body.footer')
   

  <script src="{{asset('backend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>

  <script src="{{asset('backend/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>

  <script src="{{asset('backend/assets/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>
