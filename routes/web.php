<?php

use App\Http\Controllers\KlasifikasiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
Route::get('/', [KlasifikasiController::class, 'index'])->name('klasifikasi.index');
Route::get('/klasifikasi', [KlasifikasiController::class, 'index'])->name('klasifikasi.index');
Route::post('/klasifikasi', [KlasifikasiController::class, 'klasifikasi'])->name('klasifikasi.klasifikasi');
Route::get('/riwayat-gejala', [KlasifikasiController::class, 'riwayatGejala'])->name('klasifikasi.riwayat');
// Route::post('/klasifikasi', function () {
//     $response = Http::post('http://localhost:5000/klasifikasi', [
//         'features' => request()->input('features')
//     ]);

//     return response()->json($response->json());
// });
Route::get('/riwayat-gejala', [KlasifikasiController::class, 'riwayatGejala'])->name('klasifikasi.riwayat');
