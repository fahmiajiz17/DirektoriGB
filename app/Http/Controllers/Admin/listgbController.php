<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class listgbController extends Controller
{
    public function listgb()
    {
        $guru_besar = DB::table('guru_besar')
            ->join('pt', 'guru_besar.kode_pt', '=', 'pt.kode_pt')
            ->selectRaw(
                'guru_besar.nidn, 
                guru_besar.nama, 
                guru_besar.program_studi, 
                CASE WHEN guru_besar.angka_kredit = "" THEN "-" ELSE guru_besar.angka_kredit END as angka_kredit, 
                guru_besar.jabatan_fungsional, 
                pt.nama_pt')
            ->where('guru_besar.status_gb', 'A')
            ->orderBy('guru_besar.nidn')
            ->get();

        return view('admin.listGB', compact('guru_besar'));
    }

    public function data_gb(Request $request)
    {
        $nidn = $request->query('nidn');

        // Simpan nidn terakhir yang diakses ke dalam session
        session(['nidn_terakhir' => $nidn]);

        // Ambil data nama berdasarkan nidn
        $nama = DB::table('guru_besar')
            ->where('nidn', $nidn)
            ->value('nama');

        return view('admin.data_gb', compact('nama'));
    }

    // public function update_data_prodi(Request $request, $kode_prodi)
    // {
    //     // Simpan kode PT terakhir yang diakses dari session
    //     $kode_pt_terakhir = session('kode_pt_terakhir');

    //     // Perbarui data sesuai dengan input dari form
    //     DB::table('prodi')
    //         ->where('kode_prodi', $kode_prodi)
    //         ->update([
    //             'status_akreditasi' => $request->input('status_akreditasi'),
    //             'peringkat_akreditasi_banpt' => $request->input('peringkat_akreditasi_banpt'),
    //             'nilai_akreditasi_banpt' => $request->input('nilai_akreditasi_banpt'),
    //             'no_sk_akreditasi_banpt' => $request->input('no_sk_akreditasi_banpt'),
    //             'tgl_sk_akreditasi_banpt' => $request->input('tgl_sk_akreditasi_banpt'),
    //             'tgl_kadaluarsa_sk_akreditasi_banpt' => $request->input('tgl_kadaluarsa_sk_akreditasi_banpt')
    //         ]);

    //     // Redirect kembali ke daftar_prodi dengan nidn terakhir
    //     return redirect()->route('daftar_prodi', ['kode_pt' => $kode_pt_terakhir])->with('success', 'Data Prodi berhasil diperbarui');
    // }
}
