@extends('temp.master')

@section('title', 'Order')

@section('body')
  <div class="container bg-white">
    <div class="row">
      <div class="col-xs-12">
        <nav class="breadcrumb" role="navigation">
          <ul class="list-inline">
            <li>
              <a href="/" title="Home">
                Home
              </a>
            </li>
            <li>
              <a href="/menu" title="Car">
                Menu
              </a>
            </li> 
            <li>
              <a href="/cart" title="Car">
                Cart
              </a>
            </li>                  
          </ul>
        </nav>
      </div>
    </div>
  </div>
        
  <div class="container">
    <div class="row">
        <div class="col-xs-12">
          <div class="cart-status">
            <ul>
              <li>
                <span>1</span>
                <span>Shopping Cart</span>
              </li>
              <li>
                <span>2</span>
                <span>Add Delivery</span>
              </li>
              <li class="active">
                <span>3</span>
                <span>Checkout</span>
              </li>
            </ul>              
          </div>
        </div>
       
       <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h1 class="text-center cart-title">
                  Thank you
                </h1>
                
                <p class="thankyou text-center">
                  We appreciate your preference! <i class="fa fa-smile-o" aria-hidden="true"></i>
                </p>
                
                <p class="thank-btn text-center">
                 <a href="/" class="btn btn-primary" title="Home">
                  Make a new order?
                </a>
                </p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
@endsection

@section('map')    
@endsection

@section('customscripts')  
@endsection

@section('lastscript')
@endsection