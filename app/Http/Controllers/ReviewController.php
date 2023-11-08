<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function pushComment(Request $request){
        $comment = Reviews::create([
            'user_id' => Auth::user()->id,
            'book_id' => $request->book_id,
            'comment' => $request->textComment
        ]);
        if($comment){
            $reviews = DB::table('reviews')->join('users','users.id','=','reviews.user_id')
            ->join('books','books.id','=','reviews.book_id')
            ->where('reviews.book_id','=', $request->book_id)
            ->orderBy('reviews.created_at','desc')
            ->limit(5)
            ->get();
            return view('content.list-comment', compact('reviews'));
        }
    }
    //
}
