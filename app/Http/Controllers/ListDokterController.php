<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListDokterController extends Controller
{
    public function tampilkan($id, $nama)
    {
        return view('list_dokter', ['id' => $id, 'nama' => $nama]);
    }
}