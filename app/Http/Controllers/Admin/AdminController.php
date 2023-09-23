<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function databoard(){
        return view('content.admin.databoard');
    }
    public function category(){
        return view('content.admin.category');
    }
    public function author(){
        return view('content.admin.author');
    }

    public function books(){
        return view('content.admin.books');
    }
    //
}
