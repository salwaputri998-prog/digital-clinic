<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DokterController extends Controller {
    
    public function getData() {
        return [
            ['id' => 1, 'nama' => 'Stetoskop Premium', 'biaya' => 450000],
            ['id' => 2, 'nama' => 'Termometer Infrared', 'biaya' => 125000],
        ];
    }

    // PASTIKAN NAMANYA 'index' (huruf kecil semua)
    public function index() {
        $data = $this->getData();
        return view('dokter.index', compact('data'));
    }
}