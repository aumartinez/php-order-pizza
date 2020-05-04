@extends('temp.master')

@section('title', 'Pizza: '. $pizza->prod_name)

@section('body')
  <div class="pizza-wrapper bg-pizza">
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
                <a href="/pizza/{{$pizza->prod_id}}" title="Apricot Chicken">
                  {{$pizza->prod_name}}
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
          
        <div class="container bg-white">
          <div class="row pizza-item">
            <div class="col-sm-6 img-center pizza-pic">
              <img src="{{$pizza->prod_pic}}" class="img-responsive" />
            </div>
            <div class="col-sm-6">
              <div class="pizza-caption">
                <h1>
                  {{$pizza->prod_name}}
                </h1>
                
                <p class="pizza-description">
                  {{$pizza->prod_description}}
                </p>
                
                <p class="pizza-price">
                  <span>€</span><span>{{$pizza->prod_price}}</span>
                </p>
                
                <form id="add-item" action="/add" method="post">
                @csrf
                  <div class="pizza-qty">
                    <div class="round-item">
                      <span id="minus-1"> - </span>
                      <span id="number">1</span>
                      <span id="plus-1"> + </span>
                      <input id="prod_id" name="prod_id" type="hidden" value="{{$pizza->prod_id}}" />
                      <input id="item_qty" name="item_qty" type="hidden" min="1" max="99" value="1" />
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">
                    <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> <span>Add to cart</span>
                  </button>
                </form>
                
                <div id="mess" class="alert">
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('map')    
@endsection

@section('customscripts')
      <script type="text/javascript" src="/js/form.js"></script>
@endsection