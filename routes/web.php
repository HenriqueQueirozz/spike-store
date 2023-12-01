<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SellerController;

Route::get('/', function(){ return view('inicio'); });

Route::get('/vendedores', [SellerController::class, 'index']);
Route::get('/vendedores/create', [SellerController::class, 'create']);
Route::get('/vendedores/alter', function(){ return view('seller.alter'); });

Route::get('/vendas', function(){ return view('sale.alter'); });
