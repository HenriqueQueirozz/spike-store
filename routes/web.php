<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageSaleController;
use App\Http\Controllers\PageSellerController;

Route::get('/', function(){ return view('inicio'); });

Route::get('/vendedores', [PageSellerController::class, 'vendedores']);
Route::get('/vendedores/create', [PageSellerController::class, 'vendedores_create']);
Route::get('/vendedores/alter', [PageSellerController::class, 'vendedores_alter']);

Route::get('/vendas', [PageSaleController::class, 'vendas']);
Route::get('/vendas/alter', [PageSaleController::class, 'vendas_alter']);