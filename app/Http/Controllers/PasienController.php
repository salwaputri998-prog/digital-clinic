<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PasienController extends Controller {
    
    public function getData() {
        return [
            ['id' => 1, 'nama' => 'Pendaftaran Pasien Baru', 'biaya' => 15000],
            ['id' => 2, 'nama' => 'Cek Gula Darah', 'biaya' => 20000],
            ['id' => 3, 'nama' => 'Pembersihan Luka', 'biaya' => 35000],
            ['id' => 4, 'nama' => 'Vitamin C Booster', 'biaya' => 50000],
        ];
    }

    public function index() {
        $data = $this->getData();
        return view('pasien.index', compact('data'));
    }
}