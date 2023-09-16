<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('content.index');
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
