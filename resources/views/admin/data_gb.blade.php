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
            <h2>{{ $guru_besar->nama }}</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('assets/img/team/cikgu.jpg') }}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <table>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $guru_besar->nama}}</td>
                            </tr>
                            <tr>
                                <th>NIDN</th>
                                <td>:</td>
                                <td>{{ $guru_besar->nidn}}</td>
                            </tr>
                            <tr>
                                <th>Perguruan Tinggi</th>
                                <td>:</td>
                                <td>{{ $guru_besar->nama_pt}}</td>
                            </tr>
                            <tr>
                                <th>Program Studi</th>
                                <td>:</td>
                                <td>{{ $guru_besar->program_studi}}</td>
                            </tr>
                            <tr>
                                <th>Jabatan Fungsional</th>
                                <td>:</td>
                                <td>{{ $guru_besar->jabatan_fungsional}}</td>
                            </tr>
                            <tr>
                                <th>Kredit</th>
                                <td>:</td>
                                <td>{{ $guru_besar->angka_kredit}}</td>
                            </tr>
                            <tr>
                                <th>TMT</th>
                                <td>:</td>
                                <td>{{ $guru_besar->tmt}}</td>
                            </tr>
                            <tr>
                                <th>Lama Kerja</th>
                                <td>:</td>
                                <td>{{ $guru_besar->lama_kerja}}</td>
                            </tr>
                            <tr>
                                <th>Organisasi Profesi</th>
                                <td>:</td>
                                <td>
                                <a href="{{ route('admin.organisasi', $guru_besar->nidn) }}">Selengkapnya</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Publikasi</th>
                                <td>:</td>
                                <td>
                                <a href="{{ route('admin.publikasi', $guru_besar->nidn) }}">Selengkapnya</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection