<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/', function () {
    return view('user/Landing_Page');
});

// user management
Route::group(['middleware' => 'guest'], function() {
    Route::get('/user/register', [UserController::class, 'register']);
    Route::post('/user/register', [UserController::class, 'store']);
    Route::get('/user/login', [UserController::class, 'login'])->name('login');
    Route::post('/user/login', [UserController::class, 'authenticate']);
});
Route::group(['middleware' => 'auth'], function() {
    Route::post('/user/logout', [UserController::class, 'logout']);
    Route::get('/user/settings', [UserController::class, 'settings']);
});
