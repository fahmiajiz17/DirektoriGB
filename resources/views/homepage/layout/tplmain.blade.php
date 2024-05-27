<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- CSS -->
  @include('homepage.include.style')

</head>

<body>
  
  <!-- Header -->
  @include('homepage.include.header')

  <!-- Content -->
  @yield('content')

  <!-- Footer -->
  @include('homepage.include.footer')

  <!-- JavaScript -->
  @include('homepage.include.script')

</body>

</html>