<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function tampil()
    {
        $id = 1;
        $produk = "Layanan Konsultasi";

        return view('list_product', compact('id', 'produk'));
    }
}