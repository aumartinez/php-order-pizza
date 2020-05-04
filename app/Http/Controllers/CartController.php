<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function index() {
      $cart = session()->get('cart');
      $arr = array();
      
      if (!$cart) {        
        $decoded = json_encode($arr);
        return view('cart', compact('decoded'));
      }
      else{
        foreach($cart as $key => $value) {
          $arr['product'][] = Product::where('prod_id', $key)->get();
          $arr['product_qty'][$key] = $value;
        }
        
        $decoded = json_encode($arr);
        
        return view('cart', compact('decoded')); 
      }
      
    }
    
    public function store_item(Request $request) {
      
      $item = $request->input('prod_id');
      $item_qty = $request->input('item_qty');
      
      $cart = session()->get('cart');
            
      # No pizzas
      if(!$cart){
        $cart = [$item => $item_qty];
        
        session()->put('cart', $cart);        
                
        return redirect()->back()->with('success', 'Added to cart');
      }
      
      # Pizza exists, update quantity
      if(isset($cart[$item])){
        $prev = $cart[$item];
        $new = (int)$prev + $item_qty;
        
        $cart[$item] = $new;
        
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Added to cart');
      }
      else {
        #If no add to array
        
        $cart[$item] = $item_qty;      
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Added to cart');
      }
      
    }
    
    public function get_items(Request $request) {
      $cart = session()->get('cart');
      if (!$cart) {
        return response(0);
      }
      
      $items = count($cart);
      
      return response($items);
    }
    
    public function update_cart(Request $request) {
      $cart = session()->get('cart');
      
      if(!$cart){
        return redirect('/');
      }
      else {
        $item = $request->input('prod_id');
        $item_qty = $request->input('item_qty');
        
        $cart[$item] = $item_qty;
        session()->put('cart', $cart);
      }
      
      return redirect('/');
    }
    
    public function remove_item(Request $request) {
      $cart = session()->get('cart');
      
      if(!$cart) {
        return redirect('/');
      }
      else {
        $item = $request->input('prod_id');
        $temp = array();
        $temp = $cart;
        
        unset($temp[$item]);
        session()->put('cart', $temp);
        
        return redirect('/');
      }
      
    }
    
    public function redirect_to() {
      return redirect('/');
    }
}
