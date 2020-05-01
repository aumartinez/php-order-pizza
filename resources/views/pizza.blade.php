@extends('temp.master')

@section('title', 'Pizza: '. $pizza->prod_name)

@section('body')
  <div class="pizza-wrapper bg-pizza">
        <div class="container bg-white">
          <div class="row pizza-item">
            <div class="col-sm-6 img-center pizza-pic">
              <img src="/img/{{$pizza->prod_id}}.png" class="img-responsive" />
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
                
                <form id="add-item" action="/cart" method="post">
                  <div class="pizza-qty">
                    <div class="round-item">
                      <span id="minus-1"> - </span>
                      <span id="number">1</span>
                      <span id="plus-1"> + </span>
                      <input id="prod-id" name="prod-id" type="hidden" value="{{$pizza->prod_id}}" />
                      <input id="item-qty" name="item-qty" type="hidden" min="1" max="99" value="1" />
                    </div>
                  </div>
                  <button class="btn btn-primary">
                    <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> <span>Add to cart</span>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('map')    
@endsection