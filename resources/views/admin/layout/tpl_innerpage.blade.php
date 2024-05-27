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
    @include('admin.include.header_innerpage')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('admin.dashboard_admin') }}">Home</a></li>
                    <li>@yield('page')</li>
                </ol>
                <h2>@yield('namepage')</h2>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        @yield('content')

    </main><!-- End #main -->

    <!-- Footer -->
    @include('admin.include.footer')

    <!-- JavaScript -->
    @include('admin.include.script')

</body>

</html>