<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $data = [
            'pageTitle' => 'Produk',
            'content' => 'ini adalah halaman produk'
        ];
        return view('Produk', compact('data')); 
    }
}
