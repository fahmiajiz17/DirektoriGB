<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ route('admin.dashboard_admin') }}">Direktori GB</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('admin.dashboard_admin') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('admin.dashboard_admin') }}">Data</a></li>
                <li><a class="nav-link scrollto" href="{{ route('admin.listGB') }}">List Guru Besar</a></li>
                <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('admin.kontenA') }}">Konten A</a></li>
                        <li><a href="{{ route('admin.kontenB') }}">Konten B</a></li>
                        <li><a href="{{ route('admin.kontenC') }}">Konten C</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">{{ Auth::user()->name }} <i class="fas fa-user"></i></a>
                    <ul>
                        <!-- Form untuk Logout -->
                        <li>
                            <a href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->