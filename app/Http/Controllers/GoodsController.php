<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class GoodsController extends Controller
{
    public function index(){
        $data= Goods::all();
        // dd('$data');
        return view('barang.databarang', compact('data'));
    }


    public function tambahbarang(){
        return view('barang.tambahdata', [
            'tittle' => 'Barang'
        ]);
    }


    public function insertdata(Request $request){
        // dd($request->all());
        Goods::create($request->all());
        return redirect()->route('databarang');
    }

    public function ubahdatabarang($id){
        $data = Goods::find($id);
        return view('barang.ubahdata', compact('data'));
    }
    
    public function updatedatabarang(Request $request, $id){
        $data = Goods::find($id);
        $data->update($request->all());
        return redirect()->route('databarang')->with('succes', 'Data Berhasil Diupdate');
    }
}
