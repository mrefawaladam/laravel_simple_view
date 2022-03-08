<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

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


// Main Rout
Route::get('/', [HomeController::class, 'index'])->name('main-page');
// about 
Route::get('/about', [AboutController::class, 'index'])->name('about-page');
// product
Route::get('/product', [ProductController::class, 'index'])->name('product-page');
// blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog-page');;
Route::get('/blog/{keyword}', [BlogController::class, 'detail'])->name('blog-detail-page');;
// contact
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-page');;

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
