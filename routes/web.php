<?php

use App\Http\Controllers\Account\LoginController;
use App\Http\Controllers\Account\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DataBoardController;
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
    Route::get('databoard',[DataBoardController::class,'databoard'])->name('adminDataboard');

    //Category
    Route::get('category',[CategoryController::class,'category'])->name('adminCategory');
    Route::get('remove-category/{id}',[CategoryController::class,'remove'])->name('remveCategory');
    Route::match(['GET','POST'], 'add-category',[CategoryController::class,'add'])->name('addCategory');
    Route::match(['GET','POST'], 'edit-category/{id}',[CategoryController::class,'edit'])->name('editCategory');

    //End Category

    //Authors
    Route::get('authors',[AuthorController::class,'author'])->name('adminAuthor');
    Route::get('author-remove/{id}',[AuthorController::class,'remove'])->name('removeAuthor');
    Route::match(['GET','POST'], 'authors-add',[AuthorController::class,'add'])->name('addAuthor');
    Route::match(['GET','POST'], 'authors-edit/{id}',[AuthorController::class,'edit'])->name('editAuthor');
    //End Authors

    //Books
    Route::get('books',[BooksController::class,'books'])->name('adminBooks');
    Route::get('books-remove/{id}',[BooksController::class,'remove'])->name('removeBook');
    Route::match(['GET','POST'],'books-add',[BooksController::class,'add'])->name('addBooks');
    Route::match(['GET','POST'],'books-edit/{id}',[BooksController::class,'edit'])->name('editBooks');

    //End Books
    Route::get('list-user',[UserController::class,'listUser'])->name('adminListUser');
});

//Account
Route::get('login',[LoginController::class,'login'])->name('login');
Route::get('register',[RegisterController::class,'register'])->name('register');
