<?php

//hanya menampilkan halaman default '/'(slash)
// method (get, post, put dan delete)

use App\Models\Service;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\TransOrderController;

Route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post ('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//grouping routing
//resource sudah mewakili get, post, delete
Route::middleware(['auth'])->group(function(){
    Route::resource('dashboard', DashboardController::class);
    Route::resource('service', ServiceController::class);
});

// {id} bebas bisa angka atau tulisan
// {} artinya ada parameter
// klo buat admin pakai prefix

Route::get('latihan',[LatihanController::class, 'index']);
Route::get('edit/{id}',[LatihanController::class, 'edit'])->name('edit');
Route::get('hapus/{id}',[LatihanController::class, 'delete']);

//nama routing                                        ini nama methodnya
Route::get('kalkulator',[KalkulatorController::class, 'index']);
Route::get('tambah',[KalkulatorController::class, 'tambah'])->name('tambah');
Route::get('kurang',[KalkulatorController::class, 'kurang'])->name('kurang');
Route::get('kali',[KalkulatorController::class, 'kali'])->name('kali');
Route::get('bagi',[KalkulatorController::class, 'bagi'])->name('bagi');


Route::post('store-tambah',[KalkulatorController::class, 'storeTambah'])->name('store-tambah');
Route::post('store-kurang',[KalkulatorController::class, 'storeKurang'])->name('store-kurang');
Route::post('store-bagi',[KalkulatorController::class, 'storeBagi'])->name('store-bagi');
Route::post('store-kali',[KalkulatorController::class, 'storeKali'])->name('store-kali');

//resource method otomatis tanpa nulis(post,get,delete)

Route::resource('user', UsersController::class);
Route::get('delete/{id}', [UsersController::class, 'delete'])->name('delete');
Route::resource('customer', CustomerController::class);
Route::resource('trans_order', TransOrderController::class);
