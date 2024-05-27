<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage.dashboard_homepage');
    }

    public function total()
    {
        return view('homepage.dashboard_homepage');
    }

    public function data()
    {
        return view('homepage.dashboard_homepage');
    }

    public function listgb()
    {
        return view('homepage.listGB');
    }

    public function KontenA()
    {
        return view('homepage.kontenA');
    }

    public function KontenB()
    {
        return view('homepage.kontenB');
    }

    public function KontenC()
    {
        return view('homepage.kontenC');
    }
}
