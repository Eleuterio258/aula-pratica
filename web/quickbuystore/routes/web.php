<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index']);
Route::get('category/{name}', [HomeController::class, 'category']);
Route::get('category/{namecat}/{nameproduc}', [HomeController::class, 'productinfo']);
Route::get('/checkout', function () {
    return view('custumer.checkout');
});

Route::get('/ordercomplete', function () {
    return view('custumer.ordercomplete');
});

Route::get('/cart', function () {
    return view('custumer.art');
});

Route::get('/wishlist', function () {
    return view('custumer.wishlist');
});


Route::get('/shop', function () {
    return view('custumer.shop');
});

Route::get('/profileinfo', function () {
    return view('custumer.profileinfo');
});


Route::get('/view', function () {
    return view('custumer.view');
});


Route::get('/account', function () {
    return view('custumer.account');
});


Route::get('/login', function () {
    return view('custumer.login');
});


Route::get('/register', function () {
    return view('register');
});
Route::get('/changepassword', function () {
    return view('custumer.changepassword');
});



















Route::get('/manageaddress', function () {
    return view('manageaddress');
});
