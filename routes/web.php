<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/payment', function () {
    return view('payment-gateway');
});

Route::get('/sample', function (){
    return view('sample');
});

//Routes for the product catalog
Route::get('/product', function (){
    return view('product-catalog');
});

Route::get('/productinfo', function (){
    return view('product-info/product-info');
});

Route::get('/AdminCatalog', function (){
    return view('Admin-catalog');
});

Route::get('/AdminCatalogSize', function (){
    return view('Admin-catalog-size');
});

Route::get('/AdminCatalogColor', function (){
    return view('Admin-catalog-color');
});


Route::get('/productinfo3', function (){
    return view('product-info/product-info-3');
});

Route::get('/productinfo2', function (){
    return view('product-info/product-info-2');
});

Route::get('/productinfo4', function (){
    return view('product-info/product-info-4');
});

Route::get('/productinfo5', function (){
    return view('product-info/product-info-5');
});

Route::get('/productinfo6', function (){
    return view('product-info/product-info-6');
});

Route::get('/productinfo7', function (){
    return view('product-info/product-info-7');
});

Route::get('/productinfo8', function (){
    return view('product-info/product-info-8');
});