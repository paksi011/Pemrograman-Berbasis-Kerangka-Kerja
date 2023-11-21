<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contoh', function () {
//     return view('ini halaman contoh');
// });

// Route::get('/abc', function () {
//     return view('ini halaman abc');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/mahasiswa/{npm}', [MahasiswaController::class, 'view']);
Route::get('/buku/{idbuku}', [BukuController::class, 'view']);
Route::get('/siswa/{nisn}', [SiswaController::class, 'view']);
