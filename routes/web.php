<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function() {
    return view('home');
})->name('/');

Route::get('/products', function(){
    return view('products');
})->name('products');