<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public function getData()
    {
        // Logika untuk mendapatkan array data
        $dataBarang = [
            ['id' => 1, 'nama' => 'KOPI ABC', 'harga' => 20000],
            ['id' => 2, 'nama' => 'White Coffee', 'harga' => 30000],
            ['id' => 3, 'nama' => 'ENERGEN', 'harga' => 40000],
            ['id' => 4, 'nama' => 'MILO', 'harga' => 50000],
            ['id' => 5, 'nama' => 'POP ICE', 'harga' => 80000],
        ];

        return $dataBarang;
    }

    public function tampilkan(){
        $data = $this->getData();
        return view('listbarang', compact('data'));
    }

}
