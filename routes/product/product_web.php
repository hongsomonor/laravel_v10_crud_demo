<?php 

use Illuminate\Support\Facades\Route;

Route::get('/create_product' , function() {
    return view('crud_operator.create');
})->name('product.create');

Route::get('/edit_product' , function () {
    return view('crud_operator.edit');
})->name('product.edit');