<?php

use App\Http\Controllers\Account\AccountSetting;
use App\Http\Controllers\Account\LoginController;
use App\Http\Controllers\Account\LogoutController;
use App\Http\Controllers\Account\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DataBoardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CartController;
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
    Route::get('book-detail/{id}', [ClientController::class,'bookDetail'])->name('bookdetail');
    Route::get('check-out', [ClientController::class,'checkOut'])->name('checkout');
    Route::get('wish-list', [ClientController::class,'wishList'])->name('wishlist');

    //Cart
    Route::get('/cart', [CartController::class,'index'])->name('Cart.index');
    // Route::post('/cart-add', [CartController::class,'add'])->name('Cart.add');
    // Route::get('/remove-item/{id}',[CartController::class,'remove'])->name('Cart.remove');

    Route::POST('/add-to-cart', [CartController::class,'addToCart'])->name('Cart.add');
    Route::delete('/remove-cart', [CartController::class,'remove'])->name('Cart.remove');
    Route::patch('/update-cart', [CartController::class,'update'])->name('Cart.update');
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

    //Banners
    Route::get('banners', [BannersController::class, 'banners'])->name('adminBanners');
    Route::get('banners-remove/{id}', [BannersController::class, 'remove'])->name('removeBanner');
    Route::match(['GET', 'POST'],'banners-add', [BannersController::class, 'add'])->name('addBanners');

    //End Banner
    Route::get('list-user',[UserController::class,'listUser'])->name('adminListUser');
});

//Account
Route::match(['GET','POST'], 'login',[LoginController::class,'login'])->name('login');
Route::match(['GET','POST'], 'register',[RegisterController::class,'register'])->name('register');
Route::get('logout', [LogoutController::class,'logout'])->name('logout');

Route::get('profile-setting', [AccountSetting::class, 'profileSetting'])->name('profileSetting');
Route::match(['GET','POST'],'profile-setting/change-password', [AccountSetting::class, 'changePassword'])->name('changePassword');



