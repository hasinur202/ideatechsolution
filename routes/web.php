<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DemoController;
use App\Http\Controllers\Backend\LoginController;

//frontend controller...
Route::get('/',[HomeController::Class,'index'])->name('home');
Route::get('/all-product',[HomeController::Class,'all_product'])->name('all.product');
Route::get('/product-details',[HomeController::Class,'details'])->name('product.details');
Route::post('/show-product',[HomeController::Class,'show'])->name('show.product');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login',[LoginController::Class,'index'])->name('login');
    Route::get('/register',[LoginController::Class,'register'])->name('register');
    Route::post('/user-login',[LoginController::Class,'login'])->name('user.login');
    Route::post('/user-store',[LoginController::Class,'store'])->name('user.store');
});

Route::group(['middleware' => 'auth'], function () {
    //dashboard routes... 
    Route::get('/dashboard',[DashboardController::Class,'index'])->name('dashboard');

    //category routes...
    Route::get('/categories',[CategoryController::Class,'index'])->name('categories');
    Route::post('/category-store',[CategoryController::Class,'store'])->name('category.add');
    Route::post('/category-update',[CategoryController::Class,'update'])->name('category.update');

    //demo routes...
    Route::get('/demos',[DemoController::Class,'index'])->name('demos');
    Route::post('/demo-store',[DemoController::Class,'store'])->name('demo.add');
    Route::post('/demo-update',[DemoController::Class,'update'])->name('demo.update');

});
