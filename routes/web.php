<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserSalesController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.confirm');

Route::middleware('auth')->name('admin.')->group( function(){
    Route::get('/', function () {
        return view('backend.index');
    });

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::resource('/users', UserController::class);
    Route::resource('/groups', GroupController::class)->except('show');
    Route::resource('/category', CategoryController::class)->except('show');
    Route::resource('/products', ProductController::class);

    Route::get('/users/{id}/sales', [UserSalesController::class, 'index']);
});