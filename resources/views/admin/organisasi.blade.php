<!-- Kerangka Template Main -->
@extends('admin.layout.tpl_innerpage')

<!-- Title -->
@section('title', 'DirektoriPT - Riwayat Organisasi Profesi')

<!-- Nama Page -->
@section('page', 'Organisasi Profesi Guru Besar')
@section('namepage', 'Organisasi Profesi Guru Besar')

<!-- Konten -->
<!-- File: resources/views/your-template.blade.php -->

@section('content')
<section class="inner-page">
    <div class="container">
        <div style="background-color: #e9ecef; padding: 30px; border-radius: 10px;">
            <h3 class="text-center">Data Organisasi Profesi Guru Besar</h3>
            <br>
            <table id="prodi" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Organisasi</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rwy_org_prf as $key => $rwy_org_prf)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $rwy_org_prf->organisasi_profesi}}</td>
                            <td>{{ $rwy_org_prf->tgl_mulai_org_prf}}</td>
                            <td>{{ $rwy_org_prf->tgl_selesai_org_prf}}</td>
                            <td><button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal">Edit</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>