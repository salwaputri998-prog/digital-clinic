<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function admin($id, $nama)
    {
        return view('dashboard_admin', compact('id', 'nama'));
    }

    public function dokter($id, $nama)
    {
        return view('dashboard_dokter', compact('id', 'nama'));
    }

    public function pasien($id, $nama)
    {
        return view('dashboard_pasien', compact('id', 'nama'));
    }
}