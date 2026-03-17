<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListResepController extends Controller
{
    public function index()
    {
        return view('list_resep');
    }
    
    public function show($no_resep, $pasien, $dokter, $obat)
    {
        return view('list_resep', compact('no_resep', 'pasien', 'dokter', 'obat'));
    }
}