<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiDetailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Barang
Route::resource('barang',BarangController::class);
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/tbarang', [BarangController::class, 'create'])->name('tbarang');
//User
Route::resource('users',UserController::class);
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::resource('transaksi',TransaksiController::class);
Route::get('/tpenjualan', [TransaksiController::class, 'create'])->name('tpenjualan');

// Route::post('/tambah', [BarangController::class, 'create'])->name('tambahbarang');
Route::post('/transaksi/detail/create', [TransaksiDetailController::class, 'create'])->name('transaksidt');
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/user', [UserController::class, 'index'])->name('user');

