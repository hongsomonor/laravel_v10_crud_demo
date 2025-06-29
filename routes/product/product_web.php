<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/create_product' , function() {
//     return view('crud_operator.create');
// })->name('product.create');

// Route::get('/edit_product' , function () {
//     return view('crud_operator.edit');
// })->name('product.edit');

// Route::get('/list_product' , function () {
//     return view('crud_operator.read');
// });

Route::get('/product' , [ProductController::class , 'show_product'])->name('product.read');
Route::get('/product/create_product' , [ProductController::class , 'create_product'])->name('product.create');
Route::get('product/delete/{id}' , [ProductController::class , 'destroy_product'])->name('product.destroy');
Route::get('/product/update_product/{id}' ,[ProductController::class , 'update_product'] )->name('product.update');
