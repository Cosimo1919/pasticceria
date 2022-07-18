<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/admin/home',[AdminController::class, 'index']);


// Categories route for Admin
Route::get('/admin/category/home', [CategoryController::class, 'index'])->name('category.home');
Route::post('/admin/category/create', [CategoryController::class, 'store'])->name('category.create');
Route::get('/admin/category/{category}/active', [CategoryController::class, 'activeCategory'])->name('category.active');
Route::get('/admin/category/{category}/disactive', [CategoryController::class, 'disactiveCategory'])->name('category.disactive');


// Product route for Admin
Route::get('/admin/product/home', [ProductController::class, 'index'])->name('product.home');

// Order route for Admin
Route::get('/admin/order/home', [OrderController::class, 'index'])->name('order.home');

// Users route for Admin
Route::get('admin/user/home', [UserController::class, 'index'])->name('user.home');