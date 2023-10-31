<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Authors;
use App\Models\Books;
use App\Models\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(){
        $books = DB::table('books')
        ->join('authors', 'authors.id' ,'=','books.author_id')
        ->select('books.*', 'authors.name as author_name')
        ->whereNull('books.deleted_at')
        ->get();
        // dd($books);
        $banners = Banners::all();
        return view('content.index', compact('books', 'banners'));
    }
    public function category(){
        $books = DB::table('books')->join('authors', 'authors.id', '=', 'books.author_id')
        ->select('books.*', 'authors.name as author_name')
        ->whereNull('books.deleted_at')
        ->get();
        // dd($books);
        return view('content.category', compact('books'));
    }
    public function bookDetail($id){
        $book = Books::find($id);
        return view('content.bookdetail', compact('book'));
    }
    public function checkOut(){
        return view('content.checkout');
    }
    public function wishList(){
        return view('content.wishlist');
    }
    //
}
