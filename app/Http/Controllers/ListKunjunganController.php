<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListKunjunganController extends Controller
{
    public function index()
    {
        return view('list_kunjungan');
    }
    
    public function show($id, $pasien, $dokter)
    {
        return view('list_kunjungan', compact('id', 'pasien', 'dokter'));
    }
}