<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
@include('Layouts.head')
</head>
<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
@include('Share.navbar')

<main id="main">
@yield('content')
</main>
@include('Share.footer')
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>

@include('Layouts.script')

</body>

</html>