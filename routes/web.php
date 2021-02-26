<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/', [DasboardController::class, 'index']);

Route::resource('/modal', ModalController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('/pemasukan', PemasukanController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('/pengeluaran', PengeluaranController::class)->middleware(['auth:sanctum', 'verified']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
