<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageSaleController;
use App\Http\Controllers\PageSellerController;

/* Apresentação */
Route::get('/', function(){ return view('inicio'); });

/* Páginas de apresentação */
Route::get('/vendedores', [PageSellerController::class, 'index']);
Route::get('/vendedores/create', [PageSellerController::class, 'create']);
Route::get('/vendedores/edit/{id}', [PageSellerController::class, 'edit']);

Route::get('/vendas{seller_id?}', [PageSaleController::class, 'index']);
Route::get('/vendas/create', [PageSellerController::class, 'create_vendas']);

/* Processamento */
Route::post('/v1/seller/store', [PageSellerController::class, 'store']);
Route::post('/v1/seller/update', [PageSellerController::class, 'update']);
Route::get('/v1/seller/destroy/{id}', [PageSellerController::class, 'destroy']);

Route::post('/v1/sale/store', [PageSaleController::class, 'store']);
