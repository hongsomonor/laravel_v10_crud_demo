<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/product/store_product' , [ProductController::class , 'store_product'])->name('product.store');
Route::post('/product/update_product/{id}' , [ProductController::class , 'update_store_product'])->name('product.update.store');