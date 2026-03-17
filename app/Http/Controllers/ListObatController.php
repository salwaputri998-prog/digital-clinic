<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListObatController extends Controller
{
    public function index()
    {
        return view('list_obat');
    }
    
    public function show($id, $nama)
    {
        return view('list_obat', compact('id', 'nama'));
    }
    
    public function tampilkan($id, $nama)
    {
        return view('list_obat', compact('id', 'nama'));
    }
}