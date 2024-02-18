<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanBukuController;
use App\Http\Controllers\PengembalianBukuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('kategori', KategoriController::class);
Route::apiResource('buku', BukuController::class);
Route::apiResource('pinjambuku', PeminjamanBukuController::class);
Route::apiResource('pengembalianbuku', PengembalianBukuController::class);

Route::get('pinjambuku/borrowedBooks', [PeminjamanBukuController::class, 'borrowedBooks']);