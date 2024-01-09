<?php

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

Route::get('/', [App\Http\Controllers\IndonesiaController::class, 'index']);
Route::get('/produk', [App\Http\Controllers\IndonesiaController::class, 'buku']);
Route::get('/infografis', [App\Http\Controllers\IndonesiaController::class, 'infografis']);
Route::get('/layanan', [App\Http\Controllers\IndonesiaController::class, 'galeri']);
Route::get('/tentang-kami', [App\Http\Controllers\IndonesiaController::class, 'tentangKami']);



