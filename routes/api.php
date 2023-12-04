<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiSaleController;
use App\Http\Controllers\ApiSellerController;

Route::resource('/seller', ApiSellerController::class)->except([
    'edit', 'create'
]);

Route::resource('/sale', ApiSaleController::class)->except([
    'edit', 'create'
]);