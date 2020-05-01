<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index() {      
      $pizzas = Product::all();
      return view('menu', compact('pizzas'));
    }
    
    public function pizza($id) {
      
      $pizza = Product::where('prod_id', $id)
      ->get();
                
      if(count($pizza) == 0) {
        abort(404);
      }
      
      $pizza = $pizza[0];
      
      return view('pizza', compact('pizza'));
    }
    
    public function cart() {
      return view('cart');
    }
    
    public function add_item($id) {
      
    }
}
