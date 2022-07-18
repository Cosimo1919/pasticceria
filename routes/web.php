<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/addProductToCart/{product}', [UserController::class, 'addProductToCart'])->name('addToCart');

Route::get('/admin/home',[AdminController::class, 'index']);


// Categories route for Admin
Route::get('/admin/category/home', [CategoryController::class, 'index'])->name('category.home');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/admin/category/{category}/active', [CategoryController::class, 'activeCategory'])->name('category.active');
Route::get('/admin/category/{category}/disactive', [CategoryController::class, 'disactiveCategory'])->name('category.disactive');
Route::get('/admin/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/admin/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/admin/category/delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');


// Product route for Admin
Route::get('/admin/product/home', [ProductController::class, 'index'])->name('product.home');
Route::post('/admin/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/admin/product/{product}/active', [ProductController::class, 'activeproduct'])->name('product.active');
Route::get('/admin/product/{product}/disactive', [ProductController::class, 'disactiveproduct'])->name('product.disactive');
Route::get('/admin/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/admin/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/admin/product/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');
Route::get('/admin/product/show/{product}', [ProductController::class, 'show'])->name('product.show');

// Order route for Admin
Route::get('/admin/order/home', [OrderController::class, 'index'])->name('order.home');

// Users route for Admin
Route::get('admin/user/home', [UserController::class, 'index'])->name('user.home');

Auth::routes();

