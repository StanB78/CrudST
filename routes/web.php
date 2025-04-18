<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    $allproduct = Product::all();
    return view('welcome', compact('allproduct'));
});

Route::get('/login', function () {
    return view('products.login');
})->name('login');

Route::get('/edit', function () {
    $allproduct = Product::all();
    return view('products.edit');
})->name('edit');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/contact', function () {
    return view('products.contact');
})->name('products.contact');

Route::get('/register', function () {
    return view('products.register');
})->name('register');

Route::get('/create', function () {
    return view('products.create');
})->name('create');

Route::get('/admin', function () {
    $allproduct = Product::all();
    return view('products.admin', compact('allproduct'));
})->name('products.admin');



Route::post('/login/check', [LoginController::class, 'check'])->name('products.login.check');



//route naar CRUD systeem voor het menu
Route::resource('products', ProductController::class);

