<?php

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
