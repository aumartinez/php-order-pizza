<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

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
        
        $count = DB::table('orders')->count();
        
        if ($count == 0) {
          $order_id = 1;
          $created_at = date("Y-m-d", time());
          
          DB::table('orders')->insert(
              ['order_id' => $order_id, 'created_at' => $created_at]
          );
        }
        
        $created_at = date("Y-m-d", time());
        $order_id = DB::table('orders')->max('order_id');
        $order_id++;
        
        DB::table('orders')->insert(
              ['order_id' => $order_id, 'created_at' => $created_at]
          );
        
        $decoded = json_encode($arr);
        
        $list = [$order_id, $decoded];
        
        return view('cart', compact('list')); 
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
    
    public function store_order() {
      
      $arr = $_POST;
      array_shift($arr);
      $order_id = array_shift($arr);
      $created_at = date("Y-m-d", time());
      
      while(count($arr) > 0) {
        
        $prod_id = array_shift($arr);
        $prod_qty = array_shift($arr);
        
        DB::table('orders')->insert(
              ['order_id' => $order_id,
              'created_at' => $created_at,
              'prod_id' => $prod_id,
              'prod_qty' => $prod_qty,
              'updated_at' => date("Y-m-d", time())
              ],
          );        
      }
      
      return redirect('/order');
    }
}
