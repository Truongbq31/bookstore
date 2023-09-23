<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $books = Books::all();
        return view('content.index', compact('books'));
    }
    public function category(){
        return view('content.category');
    }
    public function bookDetail(){
        return view('content.bookdetail');
    }
    public function checkOut(){
        return view('content.checkout');
    }
    public function wishList(){
        return view('content.wishlist');
    }
    //
}
