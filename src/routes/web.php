<?php

use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [OrderController::class, 'index']);
Route::post('/checkout', [OrderController::class, 'checkout']);
// Route::post('/midtrand-callback', [OrderController::class, 'callback']);
