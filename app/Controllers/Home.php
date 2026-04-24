<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('v_home', [
            'title' => 'Home',
        ]);
    }

    public function produk()
    {
        return view('v_produk', [
            'title' => 'Produk',
        ]);
    }

    public function keranjang()
    {
        return view('v_keranjang', [
            'title' => 'Keranjang',
        ]);
    }
}
