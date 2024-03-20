<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProdukController extends Controller
{
    public function ambilData() {
        $dataProduk = [
            ['id'=>1, 'produk'=>'Minyak Makan'],
            ['id'=>2, 'produk'=>'Minyak Goreng'],
            ['id'=>3, 'produk'=>'Minyak Tanah']
        ];

        return $dataProduk;
    }

    public function show(){
        $data = $this->ambilData();
        return view('list_product', compact('data'));
    }
}
