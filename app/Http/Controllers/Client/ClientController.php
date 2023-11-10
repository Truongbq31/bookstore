<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Authors;
use App\Models\Books;
use App\Models\Banners;
use App\Models\Reviews;
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
        $books = DB::table('books')
        ->join('authors', 'authors.id', '=', 'books.author_id')
        ->join('categories','categories.id','=','books.category_id')
        ->select('books.*', 'authors.name as author_name', 'categories.name as cate_name')
        ->whereNull('books.deleted_at')
        ->get();
        // dd($books);
        return view('content.category', compact('books'));
    }
    public function bookDetail($id){
        $allBook = DB::table('books')->join('authors','authors.id','=','books.author_id')
        ->join('categories','categories.id','=','books.category_id')
        ->whereNull('books.deleted_at')
        ->select('books.*','authors.name', 'categories.name as cate_name')
        ->get();
        // dd($allBook);

        $book = DB::table('books')->join('authors','authors.id','=','books.author_id')
        ->join('categories','categories.id','=','books.category_id')
        ->where('books.id', $id)
        ->whereNull('books.deleted_at')
        ->select('books.*','authors.name', 'categories.name as cate_name')
        ->first();
        // dd($book);

        $reviews = DB::table('reviews')->join('users','users.id','=','reviews.user_id')
        ->join('books','books.id','=','reviews.book_id')
        ->where('reviews.book_id','=', $id)
        ->where('reviews.status','=',1)
        ->orderBy('reviews.created_at','desc')
        ->limit(5)
        ->get();
        // dd($reviews);
        return view('content.bookdetail', compact('book', 'reviews', 'allBook'));
    }
    public function checkOut(){
        return view('content.checkout');
    }
    public function wishList(){
        return view('content.wishlist');
    }

    public function getBooksBySearch(Request $request){
        $keyWords = $request->search;
        $books = DB::table('books')
        ->join('authors', 'authors.id' ,'=','books.author_id')
        ->join('categories','categories.id','=','books.category_id')
        ->select('books.*', 'authors.name as author_name', 'categories.name as cate_name')
        ->orWhere('books.bookName','like','%'.$request->search.'%')
        ->orWhere('categories.name','like','%'.$request->search.'%')
        ->orWhere('authors.name','like','%'.$request->search.'%')
        ->get();
        return view('content.book-by-search', compact('books', 'keyWords'));
    }
    //
}
