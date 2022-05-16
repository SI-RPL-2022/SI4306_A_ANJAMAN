<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;

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

// main routes
Route::get('/', [HomeController::class, 'main']);

// user management
Route::group(['middleware' => 'guest'], function() {
    Route::get('/user/register', [UserController::class, 'register']);
    Route::post('/user/register', [UserController::class, 'store']);
    Route::get('/user/login', [UserController::class, 'login'])->name('login');
    Route::post('/user/login', [UserController::class, 'authenticate']);
});
Route::group(['middleware' => 'auth'], function() {
    Route::post('/user/logout', [UserController::class, 'logout']);
    Route::get('/user/profile', [UserController::class, 'profile']);
    Route::get('/user/editaddress/{id}', [UserController::class, 'edit']);
    Route::post('/user/updateaddress/{id}', [UserController::class, 'update']);
});

// market management
Route::group(['middleware' => 'auth'], function() {
    Route::get('/find',[MarketController::class, 'find'])->name('web.find');
    Route::get('/user/market', [MarketController::class, 'show']);
    Route::get('/user/market/category=tas', [MarketController::class, 'show_tas']);
    Route::get('/user/market/category=keranjang', [MarketController::class, 'show_keranjang']);
    Route::get('/user/market/category=topi', [MarketController::class, 'show_topi']);
    Route::get('/user/market/category=pot', [MarketController::class, 'show_pot']);
    Route::get('/user/details/{id}', [MarketController::class, 'product']);
});

// cart management
Route::group(['middleware' => 'auth'], function() {
    Route::get('/cart/store/{id}', [CartController::class, 'store']);
    Route::get('/user/cart', [CartController::class, 'show']);
    Route::get('/cart/destroy/{id}', [CartController::class, 'destroy']); // cek session
    Route::post('/user/checkout', [CartController::class, 'checkout']);
    Route::get('/user/checkout/{product_id}/', [CartController::class, 'checkoutOne']);
});

// admin management
Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/admin/transaksi', [AdminController::class, 'transaksi_show']);
    Route::get('/admin/detailtransaksi/{id}', [AdminController::class, 'detail']);
    Route::get('/admin/editstatus/{id}', [AdminController::class, 'transaksi_edit']);
    Route::post('/admin/updatestatus/{id}', [AdminController::class, 'transaksi_update']);
});