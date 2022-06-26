<?php

use Illuminate\Support\Facades\Route;
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('dashboard_ar', function () {
    return view('dashboard_ar');
});
//Users
Route::get('users', function () {
    return view('users');
});
Route::get('users_ar', function () {
    return view('users_ar');
});
// Products
Route::get('products', [App\Http\Controllers\English\NewProducts::class, 'products']);
Route::get('products', [App\Http\Controllers\English\Categorie::class, 'Categorie']);
Route::post('/new-product', [App\Http\Controllers\English\NewProducts::class, 'add_products']);
Route::get('all_products', [App\Http\Controllers\English\NewProducts::class, 'get_products']);
Route::get('products/edit/{productID}', [App\Http\Controllers\English\EditProducts::class, 'edit_Product']);

//Banner
Route::post('/new-banner', [App\Http\Controllers\English\Addbanner::class, 'add_banner']);
Route::get('banner', [App\Http\Controllers\English\Addbanner::class, 'banner']);
Route::get('all_banner', [App\Http\Controllers\English\Addbanner::class, 'banner_view']);

Route::get('add_products_ar', function () {
    return view('add_products_ar');
});


Route::get('all_products_ar', function () {
    return view('all_products_ar');
});

//Orders
Route::get('orders', function () {
    return view('orders');
});
Route::get('orders_ar', function () {
    return view('orders_ar');
});


Route::get('banner_ar', function () {
    return view('banner_ar');
});


Route::get('all_banner_ar', function () {
    return view('all_banner_ar');
});






