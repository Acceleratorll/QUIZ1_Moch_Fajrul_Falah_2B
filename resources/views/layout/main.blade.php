<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DevFolio Bootstrap Portfolio Template - Blog Single</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/img/favicon.png') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/img/apple-touch-icon.png') }}">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css') }}">
</head>

<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>