<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard_admin');
    }

    public function total()
    {
        return view('admin.dashboard_admin');
    }

    public function data()
    {
        return view('admin.dashboard_admin');
    }

    public function listgb()
    {
        return view('admin.listGB');
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
