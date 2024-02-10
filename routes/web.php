<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageSaleController;
use App\Http\Controllers\PageSellerController;

/* Apresentação */
Route::get('/', function(){ return view('home'); });

/* Páginas de apresentação */
Route::get('/seller', [PageSellerController::class, 'index']);
Route::get('/seller/create', [PageSellerController::class, 'create']);
Route::get('/seller/edit/{id}', [PageSellerController::class, 'edit']);

Route::get('/sale{seller_id?}', [PageSaleController::class, 'index']);
Route::get('/sale/create', [PageSellerController::class, 'createSales']);

/* Processamento */
Route::post('/v1/seller/store', [PageSellerController::class, 'store']);
Route::post('/v1/seller/update', [PageSellerController::class, 'update']);
Route::get('/v1/seller/destroy/{id}', [PageSellerController::class, 'destroy']);

Route::post('/v1/sale/store', [PageSaleController::class, 'store']);
