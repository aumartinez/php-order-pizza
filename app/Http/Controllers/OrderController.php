<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function place_order() {
      $order_id = DB::table('orders')->max('order_id');
      $get_items =DB::table('orders')
      ->where('order_id', '=', $order_id)
      ->get();
      
      $items = $get_items->toArray();
      
      $i = count($items);
      $prods = array();
      
      for ($j = 1; $j < $i; $j++) {
        $prods[] = $items[$j]->prod_id;
      }
      
      $qtys = array();
      
      for ($j = 1; $j < $i; $j++) {
        $qtys[] = $items[$j]->prod_qty;
      }
            
      $query = DB::table('products')
             ->whereIn('prod_id', $prods)             
             ->get();
             
      $prods_name = array();
      $prods_price = array();
      
      for ($j = 0; $j < count($query); $j++) {
        $prods_name[] = $query[$j]->prod_name;
      }
      
      for ($j = 0; $j < count($query); $j++) {
        $prods_price[] = $query[$j]->prod_price;
      }       
                       
      $amounts = array();
      
      for($i = 0; $i < count($qtys); $i++){
        $amounts[] = round($qtys[$i] * $query[$i]->prod_price, 2);
      }
      
       $arr = array();
      
      for ($i = 0; $i < count($qtys); $i++) {
        $arr[$i][] = $qtys[$i];
        $arr[$i][] = $query[$i]->prod_name;
        $arr[$i][] = $query[$i]->prod_price;
        $arr[$i][] = $amounts[$i];
      }
      
      $delivery = 20;
      $subtotal = array_sum($amounts);
                  
      $total = $subtotal + $delivery;
      $dollars = round($total * 1.10,2);
                  
      $list = [$arr, $subtotal, $delivery, $total, $dollars, $order_id];
      
      return view('order', compact('list'));
    }
    
    public function thankyou(Request $request) {
      $request->session()->flush();
      
      return view('complete');
    }
}
