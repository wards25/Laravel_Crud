<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shop/details', function () {
    return view('details');
});

Route::get('/register', [RegisterController::class])->name('register');
Route::post('/register', [RegisterController::class]);


