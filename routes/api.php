<?php

use App\Http\Controllers\BukuController;
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

// Route::get('/buku', [BukuController::class, 'index']);
// Route::post('/buku', [BukuController::class, 'store']);
// Route::get('/buku/{kode_buku}', [BukuController::class, 'show']);
// Route::delete('/buku/{kode_buku}', [BukuController::class, 'destroy']);

Route::resource('buku', BukuController::class);
