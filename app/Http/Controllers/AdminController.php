<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_jabatan()
    {
        return view('layout.jabatan');
    }

    public function view_gaji()
    {
        return view('layout.gaji');
    }

    public function view_presensi()
    {
        return view('layout.presensi');
    }
}
