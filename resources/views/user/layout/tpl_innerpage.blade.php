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
    @include('user.include.header_innerpage')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('user.dashboard_user') }}">Home</a></li>
                    <li>@yield('page')</li>
                </ol>
                <h2>@yield('namepage')</h2>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        @yield('content')

    </main><!-- End #main -->

    <!-- Footer -->
    @include('user.include.footer')

    <!-- JavaScript -->
    @include('user.include.script')

</body>

</html>