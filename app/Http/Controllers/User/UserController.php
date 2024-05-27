<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard_user');
    }

    public function total()
    {
        return view('user.dashboard_user');
    }

    public function data()
    {
        return view('user.dashboard_user');
    }

    public function listgb()
    {
        return view('user.listGB');
    }

    public function KontenA()
    {
        return view('user.kontenA');
    }

    public function KontenB()
    {
        return view('user.kontenB');
    }

    public function KontenC()
    {
        return view('user.kontenC');
    }
}
