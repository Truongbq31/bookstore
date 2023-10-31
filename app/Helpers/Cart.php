<?php
namespace App\Helpers;
class Cart{
    public $items = [];
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct(){
        $this->items = session('cart') ? session('cart') : [];
    }

    public function getItems(){
        // dd($this->items);
        return $this->items;
    }

    public function getTotalPrice(){
        $totalPrice = 0;
        foreach($this->items as $item){
            $totalPrice += $item['price'] * $item['quantity'];
        }
        return $totalPrice;
    }

    public function getTotalQuantity(){
        $totalQuantity = 0;
        foreach($this->items as $item){
            $totalQuantity += $item['quantity'];
        }
        return $totalQuantity;
    }
}

