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
                guru_besar.bidang_ilmu,
                pt.nama_pt')
            ->where('guru_besar.status_gb', 'A')
            ->orderBy('guru_besar.nidn')
            ->get();

        return view('admin.listGB', compact('guru_besar'));
    }

    public function showgb($nidn)
    {
        $guru_besar = DB::table('guru_besar')
            ->join('pt', 'guru_besar.kode_pt', '=', 'pt.kode_pt')
            ->select(
                'guru_besar.nidn', 
                'guru_besar.nama', 
                'guru_besar.program_studi', 
                'guru_besar.angka_kredit', 
                'guru_besar.jabatan_fungsional', 
                'guru_besar.tmt', 
                'guru_besar.lama_kerja', 
                'guru_besar.organisasi_profesi',  
                'pt.nama_pt'
            )
            ->where('guru_besar.nidn', $nidn)
            ->first();

        if (!$guru_besar) {
            abort(404);
        }

        return view('admin.data_gb', compact('guru_besar'));
    }

    public function showpublikasi($nidn)
    {
        $rwy_publikasi = DB::table('rwy_publikasi')
        ->join('guru_besar', 'rwy_publikasi.nidn', '=', 'guru_besar.nidn')
            ->select(
                'rwy_publikasi.jdl_publikasi', 
                'rwy_publikasi.link_publikasi', 
                'rwy_publikasi.thn_terbit',
                'rwy_publikasi.author',
                'rwy_publikasi.nama_jurnal',
                'rwy_publikasi.no_publikasi',
                'rwy_publikasi.bentuk_publikasi',
                'guru_besar.nidn'
            )
            ->where('guru_besar.nidn', $nidn)
            ->get();

        if (!$rwy_publikasi) {
            abort(404);
        }

        return view('admin.publikasi', compact('rwy_publikasi'));
    }

    public function updatePublikasi(Request $request, $id)
{
    DB::table('rwy_publikasi')
        ->where('id', $id)
        ->update([
            'jdl_publikasi' => $request->jdl_publikasi,
            'link_publikasi' => $request->link_publikasi,
            'thn_terbit' => $request->thn_terbit,
        ]);

    return response()->json(['success' => 'Publikasi updated successfully.']);
}


    public function showorganisasi($nidn)
    {
        $rwy_org_prf = DB::table('rwy_org_prf')
        ->join('guru_besar', 'rwy_org_prf.nidn', '=', 'guru_besar.nidn')
            ->select(
                'rwy_org_prf.organisasi_profesi', 
                'rwy_org_prf.tgl_mulai_org_prf', 
                'rwy_org_prf.tgl_selesai_org_prf'
            )
            ->where('guru_besar.nidn', $nidn)
            ->get();

        if (!$rwy_org_prf) {
            abort(404);
        }

        return view('admin.organisasi', compact('rwy_org_prf'));
    }

    public function simpanPerubahan(Request $request)
    {
        // Validasi request
        $request->validate([
            'id' => 'required|exists:rwy_publikasi,id',
            'judul' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'tahun' => 'required|integer|min:1900|max:'.date('Y'),
        ]);

        // Ambil data dari request
        $publikasiId = $request->input('id');
        $judul = $request->input('judul');
        $link = $request->input('link');
        $tahun = $request->input('tahun');

        // Update data publikasi menggunakan Query Builder
        DB::table('rwy_publikasi')
            ->where('id', $publikasiId)
            ->update([
                'jdl_publikasi' => $judul,
                'link_publikasi' => $link,
                'thn_terbit' => $tahun,
            ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Perubahan berhasil disimpan');
    }
}