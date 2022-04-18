<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function tambahdata()
    { 
        return view('Barang.tambahdata', [
        'tittle' => 'Barang'
    ]);

}
}
