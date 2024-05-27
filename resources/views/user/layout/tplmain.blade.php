<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- CSS -->
  @include('user.include.style')

</head>

<body>
  
  <!-- Header -->
  @include('user.include.header')

  <!-- Content -->
  @yield('content')

  <!-- Footer -->
  @include('user.include.footer')

  <!-- JavaScript -->
  @include('user.include.script')

</body>

</html>