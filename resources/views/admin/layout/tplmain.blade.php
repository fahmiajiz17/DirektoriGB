<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- CSS -->
  @include('admin.include.style')

</head>

<body>
  
  <!-- Header -->
  @include('admin.include.header')

  <!-- Content -->
  @yield('content')

  <!-- Footer -->
  @include('admin.include.footer')

  <!-- JavaScript -->
  @include('admin.include.script')

</body>

</html>