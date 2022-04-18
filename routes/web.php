<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PengirimanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('login.index' , [
        "tittle" => "Home"
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login', [LoginController::class, 'authenticate']); 

route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout']); 


route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
route::post('/daftar', [DaftarController::class, 'store']);



// isi dari View Admin

// jika kita memanggil Route /Admin maka akan diarahkan ke controller Admin pada class Tambah Data
Route::get('/Admin', [AdminController::class, 'tambahdata']);

route::get('/datakurir',[EmployeeController::class, 'index'])->name('datakurir');
route::get('/tambahkurir',[EmployeeController::class, 'tambahkurir'])->name('tambahkurir');
// insert data = memasukan data ke dalam database
route::post('/insertdatakurir',[EmployeeController::class, 'insertdatakurir'])->name('insertdatakurir');

route::get('/ubahdata/{id}',[EmployeeController::class, 'ubahdata'])->name('ubahdata');
route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');
route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');






















































































































































// ------------------------------------------------------------------------------------------------

// isi dari View Barang
Route::get('/Barang', [BarangController::class, 'tambahdata']);

route::get('/databarang',[GoodsController::class, 'index'])->name('databarang');
route::get('/tambahbarang',[GoodsController::class, 'tambahbarang'])->name('tambahbarang');
// insert data = memasukan data ke dalam database
route::post('/insertdata',[GoodsController::class, 'insertdata'])->name('insertdata');
route::get('/ubahdatabarang/{id}' ,[GoodsController::class, 'ubahdatabarang'])->name('ubahdatabarang');
route::post('/updatedatabarang/{id}',[GoodsController::class, 'updatedatabarang'])->name('updatedatabarang');






Route::resource('/Pengiriman', PengirimanController::class);

Route::resource('/Kurir', KurirController::class);



