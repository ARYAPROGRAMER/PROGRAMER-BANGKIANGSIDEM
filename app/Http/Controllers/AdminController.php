<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function tambahdata()
    {
        return view('Admin.tambahdata',[
            'tittle' => 'Admin'
        ]);
    }
}
