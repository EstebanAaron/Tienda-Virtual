<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Product $product){
       $cart = session()->get('cart',[]);
       if(isset($cart[$product->id])){
           $cart[$product->id]++;
         }else{
          
               $cart[$product->id] = 1;
        }
        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function viewCart(){
        $cart = session()->get('cart',[]);
        $items =[];
        foreach($cart as $id => $amount){
            $product = Product::find($id);
            $items[] = [
                'id' => $id,
                'name' => $product->name,
                'price' => $product->price,
                'amount' => $amount
            ];
        }
        return view('cart.index', compact('items'));
    }
   
    public function decrement(Product $product){
        $cart = session()->get('cart',[]);
        if(isset($cart[$product->id])){
            $cart[$product->id]--;
            if($cart[$product->id] <= 0){
                unset($cart[$product->id]);
            }
        }
        session()->put('cart', $cart);
        return redirect()->back();
    }
}
