<?php

use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupirController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Produk
Route::resource('produk', ProdukController::class);
Route::resource('supir', SupirController::class);
Route::resource('peminjaman', PeminjamanController::class);
