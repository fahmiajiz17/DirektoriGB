<!-- Kerangka Template Main -->
@extends('admin.layout.tpl_innerpage')

<!-- Title -->
@section('title', 'DirektoriPT - Data Guru Besar')

<!-- Nama Page -->
@section('page', 'Data Guru Besar')
@section('namepage', 'Data Guru Besar')

<!-- Konten -->
@section('content')
    <section class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Moermahadi Soerja Djanegara</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="member-info">
                            <table>
                                <tr>
                                    <th>Nama</th>
                                    <td>:</td>
                                    <td>Moermahadi Soerja Djanegara</td>
                                </tr>
                                <tr>
                                    <th>NIDN</th>
                                    <td>:</td>
                                    <td>0431055501</td>
                                </tr>
                                <tr>
                                    <th>Perguruan Tinggi</th>
                                    <td>:</td>
                                    <td>Institut Bisnis dan Informatika Kesatuan</td>
                                </tr>
                                <tr>
                                    <th>Program Studi</th>
                                    <td>:</td>
                                    <td>Akuntansi</td>
                                </tr>
                                <tr>
                                    <th>Jabatan Fungsional</th>
                                    <td>:</td>
                                    <td>Professor</td>
                                </tr>
                                <tr>
                                    <th>Kredit</th>
                                    <td>:</td>
                                    <td>Akuntansi</td>
                                </tr>
                                <tr>
                                    <th>TMT</th>
                                    <td>:</td>
                                    <td>12/01/2017</td>
                                </tr>
                                <tr>
                                    <th>Lama Kerja</th>
                                    <td>:</td>
                                    <td>6y 3m 27d</td>
                                </tr>
                                <tr>
                                    <th>Organisasi Profesi</th>
                                    <td>:</td>
                                    <td>Null</td>
                                </tr>
                                <tr>
                                    <th>Publikasi</th>
                                    <td>:</td>
                                    <td>Null</td>
                                </tr>
                            </table>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
