<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            <h3 class="text-center">Data Organisasi Guru Besar</h3>
            <br>
            <table id="prodi" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Organisasi Profesi</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <!-- <th>Status</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rwy_org_prf as $key => $rwy_org_prf)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td class="organisasi_profesi">{{ $rwy_org_prf->organisasi_profesi }}</td>
                            <td class="tgl_mulai">{{ $rwy_org_prf->tgl_mulai_org_prf}}</td>
                            <td class="tgl_selesai">{{ $rwy_org_prf->tgl_selesai_org_prf}}</td>
                            <!-- <td class="status">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="presentCheckbox">
                                    <label class="form-check-label" for="presentCheckbox">Present</label>
                                </div>
                            </td> -->
                            <td><button type="button" class="btn btn-primary edit-btn" data-toggle="modal" data-target="#exampleModal" data-nama="{{ $rwy_org_prf->organisasi_profesi }}" data-mulai="{{ $rwy_org_prf->tgl_mulai_org_prf }}"
                            data-selesai="{{ $rwy_org_prf->tgl_selesai_org_prf }}">Edit</button></td>
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Organisasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editOrganisasiForm">
                    <div class="form-group">
                        <label for="nama">Nama Organisasi</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Organisasi">
                    </div>
                    <div class="form-group">
                        <label for="tgl_mulai">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tgl_mulai">
                    </div>
                    <div class="form-group">
                        <label for="tgl_selesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tgl_selesai" disabled>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="presentCheckboxModal">
                        <label class="form-check-label" for="presentCheckboxModal">
                            Present
                        </label>
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
        var nama = $(this).data('nama');
        var mulai = $(this).data('mulai');
        var selesai = $(this).data('selesai');

        $('#nama').val(nama);
        $('#tgl_mulai').val(mulai);
        $('#tgl_selesai').val(selesai);

        // Reset present checkbox status and disable 'tgl_selesai' input initially
        $('#presentCheckboxModal').prop('checked', false);
        $('#tgl_selesai').prop('disabled', true);
    });

    // Handle present checkbox to toggle 'tgl_selesai' input
    $('#presentCheckboxModal').on('change', function(){
        if($(this).is(':checked')){
            $('#tgl_selesai').prop('disabled', true);
        } else {
            $('#tgl_selesai').prop('disabled', false);
        }
    });
});
</script>

@endsection