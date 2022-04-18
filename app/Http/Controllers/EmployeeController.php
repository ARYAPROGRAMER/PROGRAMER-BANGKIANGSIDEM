<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  
//   keterhubungan Data pada tabel di Database yg bernama Employee
// Semua data yg diinput pada class tambah data kurir, datanya akan ditampilakan pada view admin dengan class datakurir  
    public function index(){
        $data = Employee::all(); 
        return view('admin.datakurir', compact('data'));
    }



    public function tambahkurir(){
        return view('admin.tambahdata',[
            'tittle' => 'Admin'
        ]);
    }
    public function insertdatakurir(Request $request){
        Employee::create($request->all());
        return redirect()->route('datakurir')->with('succes','Data Berhasil Ditambahkan');
    }



    public function ubahdata($id){
        $data = Employee::find($id);
        // dd($data);
        return view('admin.ubahdata', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        // dd($data);
        $data->update($request->all());
        return redirect()->route('datakurir')->with('succes','Data Berhasil Diupdate');
    }


    public function delete($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('datakurir')->with('succes','Data Berhasil Dihapus');
    }



    
}

