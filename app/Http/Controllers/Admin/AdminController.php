<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        // Controller Total GB
        $tgb = DB::table('guru_besar')
            ->where('guru_besar.status_gb', 'A')
            ->count();

        return view(
            'admin.dashboard_admin',
            compact('tgb')
        );
    }

    public function total()
    {
        return view('admin.dashboard_admin');
    }

    public function data()
    {
        return view('admin.dashboard_admin');
    }

    public function KontenA()
    {
        return view('admin.kontenA');
    }

    public function KontenB()
    {
        return view('admin.kontenB');
    }

    public function KontenC()
    {
        return view('admin.kontenC');
    }
}
