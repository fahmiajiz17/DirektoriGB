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
                'guru_besar.nidn'
            )
            ->where('guru_besar.nidn', $nidn)
            ->get();

        if (!$rwy_publikasi) {
            abort(404);
        }

        return view('admin.publikasi', compact('rwy_publikasi'));
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
}

class EditPublikasiController extends Controller
{
    public function editpublikasi($id)
    {
        $publikasi = DB::table('rwy_publikasi')
            ->where('id', $id)
            ->first();

        if (!$publikasi) {
            abort(404);
        }

        return view('admin.edit_publikasi', compact('publikasi'));
    }
}