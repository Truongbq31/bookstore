<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Cart $cart){
        return view('content.checkout', compact("cart"));
    }

    public function remove(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
        }
        return response()->json(['message'=> 'Success'],200);
    }

    public function addToCart(Request $request){
        $product = Books::find($request->id);
        $cart = session()->get('cart', []);
        if(isset($cart[$request->id])){
            $cart[$request->id]['quantity']++;
        }else{
            $cart[$request->id] = [
                'productID' => $product->id,
                'product_name' => $product->bookName,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);
        return response()->json(['message'=> 'Success'],200);
    }

    public function update(Request $request){
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            return response()->json(['message'=> 'Success'], 200);
        }
    }

}
