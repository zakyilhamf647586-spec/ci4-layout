<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home', [
            'title' => 'Dashboard'
        ]);
    }

    public function produk()
    {
        return view('home', [
            'title' => 'Halaman Produk'
        ]);
    }

    public function keranjang()
    {
        return view('home', [
            'title' => 'Keranjang'
        ]);
    }
}