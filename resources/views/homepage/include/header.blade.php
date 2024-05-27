<!-- ======= Header ======= -->
<header id="header" class="fixed-top header">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="#hero">Direktori GB</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#data">Data</a></li>
                <li><a class="nav-link scrollto" href="{{ route('listGB') }}">List Guru Besar</a></li>
                <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('kontenA') }}">Konten A</a></li>
                        <li><a href="{{ route('kontenB') }}">Konten B</a></li>
                        <li><a href="{{ route('kontenC') }}">Konten C</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<!-- End Header -->