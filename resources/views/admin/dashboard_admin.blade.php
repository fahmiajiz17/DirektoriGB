<!-- Kerangka Template Main -->
@extends('admin.layout.tplmain')

<!-- Title -->
@section('title', 'DirektoriPT - Dashboard')

<!-- Konten -->
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up">
                    <h1>Direktori Guru Besar<br>
                        LLDIKTI WILAYAH 4</h1>
                    <h2>Berisi data Guru Besar di wilayah LLDIKTI Wilayah IV berdasarkan ajuan dari Perguruan Tinggi
                        Swasta di lingkungan LLDIKTI Wilayah IV </h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in">
                    <img src="{{ asset('images/lldikti.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Jumlah Section ======= -->
        <section id="jumlah" class="jumlah">
            <div class="container">

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <center>
                                <div class="icon"><i class="fas fa-user-tie" style="color: #f45b5b;"></i></div>
                                <h4><a href="#data">Total Guru Besar</a></h4>
                                <h3>{{ $tgb }}</h3>
                                <hr>
                                <p>Jumlah Guru Besar</p>
                            </center>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <center>
                                <div class="icon"><i class="fas fa-map-location-dot" style="color: #7cb5ec;"></i></div>
                                <h4><a href="#data">Total Sebaran Wilayah</a></h4>
                                {{-- <h3>{{ $tprodi }}</h3> --}}
                                <hr>
                                <p>Jumlah Sebaran Wilayah</p>
                            </center>
                        </div>
                    </div>

                </div>
        </section>
        <!-- End Jumlah Section -->

        <!-- ======= Data Section ======= -->
        <section id="data" class="data section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Data</h2>
                    <p>Data ini adalah Perguruan Tinggi Aktif Versi LLDIKTI Wilayah IV berdasarkan ajuan dari Perguruan
                        Tinggi Swasta di lingkungan LLDIKTI Wilayah IV.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="box featured">
                            <div id="JumlahPeringkatApt"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="box featured">
                            <div id="JumlahAkreditasiProdi"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="box featured">
                            <div id="JumlahPerBentuk"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="box featured">
                            <div id="JumlahPerProvinsi"></div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Data Section -->

    </main>
    <!-- End #main -->
@endsection

{{-- @include('admin.include.highchart') --}}
