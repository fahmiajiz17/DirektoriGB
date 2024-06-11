<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- Kerangka Template Main -->
@extends('admin.layout.tpl_innerpage')

<!-- Title -->
@section('title', 'DirektoriPT - Publikasi')

<!-- Nama Page -->
@section('page', 'Publikasi Guru Besar')
@section('namepage', 'Publikasi Guru Besar')

<!-- Konten -->
<!-- File: resources/views/your-template.blade.php -->

@section('content')
<section class="inner-page">
    <div class="container">
        <div style="background-color: #e9ecef; padding: 30px; border-radius: 10px;">
            <h3 class="text-center">Data Publikasi Guru Besar</h3>
            <br>
            <table id="prodi" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Publikasi</th>
                        <th>Penulis</th>
                        <th>Nama Jurnal</th>
                        <th>No Publikasi</th>
                        <th>Bentuk Publikasi</th>
                        <th>Link Publikasi</th>
                        <th>Tahun Terbit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rwy_publikasi as $key => $rwy_publikasi)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td class="jdl_publikasi">{{ $rwy_publikasi->jdl_publikasi }}</td>
                            <td class="nama_penulis">{{ $rwy_publikasi-> author}}</td>
                            <td class="nama_jurnal">{{ $rwy_publikasi-> nama_jurnal}}</td>
                            <td class="no_publikasi">{{ $rwy_publikasi-> no_publikasi}}</td>
                            <td class="bentuk_publikasi">{{ $rwy_publikasi-> bentuk_publikasi}}</td>
                            <td class="rwy_publikasi"><a href="{{ $rwy_publikasi->link_publikasi }}" target="_blank">{{ $rwy_publikasi->link_publikasi }}</a></td>
                            <td class="thn_terbit">{{ $rwy_publikasi->thn_terbit }}</td>
                            <td><button type="button" class="btn btn-primary edit-btn" data-toggle="modal" data-target="#exampleModal" data-judul="{{ $rwy_publikasi->jdl_publikasi }}" data-penulis="{{ $rwy_publikasi->author }}"
                            data-namajurnal="{{ $rwy_publikasi->nama_jurnal }}" data-nopublikasi="{{ $rwy_publikasi->no_publikasi }}" data-bentuk="{{ $rwy_publikasi->bentuk_publikasi }}" 
                            data-link="{{ $rwy_publikasi->link_publikasi }}" data-tahun="{{ $rwy_publikasi->thn_terbit }}">Edit</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </section>

<!-- Your modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Publikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editPublikasiForm" >
                    <div class="form-group">
                        <label for="judul">Judul Publikasi</label>
                        <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Publikasi">
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" placeholder="Masukkan Penulis Publikasi">
                    </div>
                    <div class="form-group">
                        <label for="namajurnal">Nama Jurnal</label>
                        <input type="text" class="form-control" id="namajurnal" placeholder="Masukkan Penulis Publikasi">
                    </div>
                    <div class="form-group">
                        <label for="nopublikasi">No Publikasi</label>
                        <input type="text" class="form-control" id="nopublikasi" placeholder="Masukkan No Publikasi">
                    </div>
                    <div class="form-group">
                        <label for="bentuk">Bentuk Publikasi</label>
                        <input type="text" class="form-control" id="bentuk" placeholder="Masukkan Bentuk Publikasi">
                    </div>
                    <div class="form-group">
                        <label for="link">Link Publikasi</label>
                        <input type="text" class="form-control" id="link" placeholder="Masukkan Link Publikasi">
                    </div>
                    <div class="form-group">
                        <label for="year">Tahun Terbit</label>
                        <input type="text" class="form-control" id="year" placeholder="Masukkan Tahun Terbit">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('.edit-btn').on('click', function(){
        var judul = $(this).data('judul');
        var penulis = $(this).data('penulis');
        var namajurnal = $(this).data('namajurnal');
        var nopublikasi = $(this).data('nopublikasi');
        var bentuk = $(this).data('bentuk');
        var link = $(this).data('link');
        var tahun = $(this).data('tahun');

        $('#judul').val(judul);
        $('#penulis').val(penulis);
        $('#namajurnal').val(namajurnal);
        $('#nopublikasi').val(nopublikasi);
        $('#bentuk').val(bentuk);
        $('#link').val(link);
        $('#year').val(tahun);
    });
});
</script>

@endsection