<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tests\CreatesApplication;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller

{
    public function index()
    {
        return view('daftar.index',[
            'tittle' => 'Daftar'
        ]);
        
    }
    public function store(Request $request) 
    {
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('succes', 'Daftar Berhasil! Silakan Masuk');
    //kembali kehalaman login   
        return redirect('/login') ;
    }
 
}
