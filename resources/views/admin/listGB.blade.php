<!-- Kerangka Template Main -->
@extends('admin.layout.tpl_innerpage')

<!-- Title -->
@section('title', 'DirektoriPT - ListGB')

<!-- Nama Page -->
@section('page', 'List Guru Besar')
@section('namepage', 'List Guru Besar')

<!-- Konten -->
@section('content')
    <section class="inner-page">
        <div class="container">
            <div style="background-color: #e9ecef; padding: 30px; border-radius: 10px;">
                <h3 class="text-center">Data Guru Besar</h3>
                <br>
                <table id="prodi" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Perguruan Tinggi</th>
                            <th>Program Studi</th>
                            <th>Kepakaran</th>
                            <th>Kredit</th>
                            <th>Jabatan Fungsional</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru_besar as $index => $guru_besar)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $guru_besar->nidn }}</td>
                                <td>
                                    <a href="{{ route('admin.data_gb', $guru_besar->nidn) }}">{{ $guru_besar->nama }}</a>
                                </td>
                                <td>{{ $guru_besar->nama_pt }}</td>
                                <td>{{ $guru_besar->program_studi }}</td>
                                <td>{{ $guru_besar->bidang_ilmu}}</td>
                                <td>{{ $guru_besar->angka_kredit }}</td>
                                <td>{{ $guru_besar->jabatan_fungsional }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <style>
        /* Bootstrap CSS untuk tabel */
        #prodi {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }

        #prodi th,
        #prodi td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid rgba(0, 0, 0, 0.125);
        }

        #prodi thead th {
            vertical-align: bottom;
            border-bottom: 2px solid rgba(0, 0, 0, 0.125);
        }

        #prodi tbody+tbody {
            border-top: 2px solid rgba(0, 0, 0, 0.125);
        }

        /* CSS untuk mengubah warna teks pagination menjadi hitam */
        .pagination .page-link {
            color: black !important;
            /* warna teks hitam */
        }

        /* CSS untuk mengubah warna teks pagination menjadi putih saat diklik */
        .pagination .page-item.active .page-link {
            color: white !important;
            /* warna teks putih */
        }
    </style>

    {{-- DataTables CSS --}}
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Bootstrap JS --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- DataTables JS --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script>
        new DataTable('#prodi');
    </script>

@endsection
{{-- End Konten --}}
