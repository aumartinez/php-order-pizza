@extends('temp.master')

@section('title', 'Cart')

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
                    <a href="/menu" title="Menu">
                      Menu
                    </a>
                  </li>
                  <li>
                    <a href="/Cart" title="Car">
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
                <li class="active">
                  <span>1</span>
                  <span>Shopping Cart</span>
                </li>
                <li>
                  <span>2</span>
                  <span>Add Shipping</span>
                </li>
                <li>
                  <span>3</span>
                  <span>Checkout</span>
                </li>
              </ul>              
            </div>
          </div>
          
          @if(!session('cart') || count(session('cart')) == 0 || 'list' == null)
          <!-- Empty cart -->
          <div class="col-xs-12 cart-cont empty">
            <h1 class="text-center">
              Your cart is currently empty
            </h1>
            
            <p class="text-center">
              <a href="/menu" class="btn btn-primary" title="Return to shop">
                Return to shop
              </a>
            </p>
          </div>
          @endif
          
          @if(session('cart') && count(session('cart')) > 0 && 'list' != null)
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <h1 class="text-center cart-title">
                    Your shopping cart
                  </h1>
                </div>
              </div>
            </div>
            
            <form id="cart-form" action="/cart/order" method="post" class="cart-wrapper">
            @csrf
                <input id="order-number" name="order-number" type="hidden" value="{{$list[0]}}" />
                <div class="col-xs-12 cart-cont">
                    <div class="row" id="cart">
                      <!-- add items -->
                    </div>
                </div>
            </form> 
          @endif
          
        </div>
      </div>
@endsection

@section('map')    
@endsection

@section('customscripts')
  <script type="text/babel" src="/js/cart.babel.js"></script>
  <script type="text/javascript" src="/js/cart.js"></script>     
@endsection

@section('lastscript')
  <script type="application/ld+json">
   {!!$list[1] ?? '[]'!!}
  </script>
@endsection