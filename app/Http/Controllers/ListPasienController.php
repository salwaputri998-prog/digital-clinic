<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListPasienController extends Controller
{
    public function index()
    {
        return view('list_pasien');
    }
    
    public function show($id, $nama)
    {
        return view('list_pasien', compact('id', 'nama'));
    }
}