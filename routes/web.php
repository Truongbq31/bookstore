<?php

use App\Http\Controllers\Account\LoginController;
use App\Http\Controllers\Account\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ClientController;
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

Route::get('/', function () {
    return view('welcome');
});

//Client
Route::prefix('bookstore')->group(function(){
    Route::get('index', [ClientController::class,'index'])->name('index');
    Route::get('category', [ClientController::class,'category'])->name('category');
    Route::get('book-detail', [ClientController::class,'bookDetail'])->name('bookdetail');
    Route::get('check-out', [ClientController::class,'checkOut'])->name('checkout');
    Route::get('wish-list', [ClientController::class,'wishList'])->name('wishlist');
});

//Admin
Route::prefix('admin')->group(function(){
    Route::get('databoard',[AdminController::class,'databoard'])->name('adminDataboard');
    Route::get('category',[AdminController::class,'category'])->name('adminCategory');
    Route::get('author',[AdminController::class,'author'])->name('adminAuthor');
    Route::get('books',[AdminController::class,'books'])->name('adminBooks');
    Route::get('list-user',[UserController::class,'listUser'])->name('adminListUser');
});

//Account
Route::get('login',[LoginController::class,'login'])->name('login');
Route::get('register',[RegisterController::class,'register'])->name('register');
