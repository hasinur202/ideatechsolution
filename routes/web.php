<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DemoController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Backend\DashboardController;

//frontend controller...
Route::get('/',[HomeController::Class,'index'])->name('home');
Route::get('/all-demos',[HomeController::Class,'all_product'])->name('all.product');

Route::get('/{cat}/{slug}',[HomeController::Class,'details']);

Route::post('/show-product',[HomeController::Class,'show'])->name('show.product');
Route::get('/contact-us',[ContactController::Class,'index'])->name('contact');
Route::get('/about-us',[AboutController::Class,'index'])->name('about');
Route::get('/services',[ServiceController::Class,'index'])->name('service');




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
    Route::post('/change-status',[CategoryController::Class,'change_status'])->name('status.change');

    //demo routes...
    Route::get('/demos',[DemoController::Class,'index'])->name('demos');
    Route::post('/demo-store',[DemoController::Class,'store'])->name('demo.add');
    Route::post('/demo-update',[DemoController::Class,'update'])->name('demo.update');

});
