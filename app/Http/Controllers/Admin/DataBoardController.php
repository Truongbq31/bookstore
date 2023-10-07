<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataBoardController extends Controller
{
    public function databoard(){
        return view('content.admin.databoard');
    }
    //
}
