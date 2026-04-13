<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller {
    public function getData() {
        return [
            ['id' => 1, 'nama' => 'Kertas Printer A4', 'biaya' => 45000],
            ['id' => 2, 'nama' => 'Tinta Stempel', 'biaya' => 12000],
            ['id' => 3, 'nama' => 'Map Rekam Medis', 'biaya' => 5000],
        ];
    }

    public function tampilkan() {
        $data = $this->getData();
        return view('admin.index', compact('data'));
    }
}