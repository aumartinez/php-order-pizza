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
              <li class="active">
                <span>2</span>
                <span>Add Delivery</span>
              </li>
              <li>
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
                  Review your order
                </h1>
              </div>
            </div>
          </div>
          
          <!-- Cart with items -->
          <form id="cart-form" action="/checkout" method="post" class="order-wrapper">
          @csrf
          <input id="order-number" name="order-number" type="hidden" value="{{$list[5]}}" />
            <div class="col-xs-12 order-cont">
              <div class="row">
                <div class="col-sm-9">
                  <table class="table table-striped table-order">
                    <thead class="bg-primary">
                      <tr class="color-white">
                        <th>Qty</th>
                        <th>Description</th>
                        <th>Unit price</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($list[0] as $item)
                      <tr>
                        <td class="item-qty">{{$item[0]}}</td>
                        <td class="item-name">{{$item[1]}}</td>
                        <td class="item-price"><span>€</span> <span>{{$item[2]}}</span></td>
                        <td class="item-amount"><span>€</span> <span>{{$item[3]}}</span></td>
                      </tr>                    
                    @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Subtotal</td>
                        <td id="subtotal"><span>€</span><span>{{$list[1]}}</span></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Delivery</td>
                        <td id="order-delivery"><span>€</span><span>{{$list[2]}}</span></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td id="total"><span>€</span> <span>{{$list[3]}}</span></td>
                      </tr>
                    </tfoot>
                  </table>
                  
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-center address-info">
                      <h2>
                        Add your delivery address
                      </h2>
                      <p>
                        Required <span class="required">*</span>
                      </p>
                      <div class="form-group">
                        <label for="cust_firstname">
                          First Name: <span class="required">*</span>
                        </label>
                        <input id="cust_firstname" name="cust_firstname" type="text" class="form-control" required />
                      </div>
                      
                      <div class="form-group">
                        <label for="cust_lastname">
                          Last Name: <span class="required">*</span>
                        </label>
                        <input id="cust_lastname" name="cust_lastname" type="text" class="form-control" required />
                      </div>
                      
                      <div class="form-group">
                        <label for="cust_email">
                          Email: <span class="required">*</span>
                        </label>
                        <input id="cust_email" name="cust_lastname" type="email" class="form-control" required />
                      </div>
                      
                      <div class="form-group">
                        <label for="cust_streetaddress1">
                          Street address (line 1): <span class="required">*</span>
                        </label>
                        <input id="cust_streetaddress1" name="cust_streetaddress1" type="text" class="form-control" required />
                      </div>
                      
                      <div class="form-group">
                        <label for="cust_streetaddress2">
                          Street address (line 2): 
                        </label>
                        <input id="cust_streetaddress2" name="cust_streetaddress2" type="text" class="form-control" />
                      </div>
                      
                      <div class="form-group short-address">
                        <div class="address-wrapper">
                          <label for="city">
                          City: <span class="required">*</span>
                          </label>
                          <input id="city" name="city" type="text" class="form-control" required />
                        </div>
                        
                        <div class="address-wrapper">
                          <label for="state">
                            State: <span class="required">*</span>
                          </label>
                          <input id="state" name="state" type="text" class="form-control" required />
                        </div>
                        
                        <div class="address-wrapper">
                          <label for="zip">
                            Zip: <span class="required">*</span>
                          </label>
                          <input id="zip" name="zip" type="text" class="form-control" required />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>                
                
                <div class="col-sm-3">
                  <div class="order-summary">
                    <div class="summary-label bg-primary">
                      <h2 class="color-white text-center">
                        Order Summary
                      </h2>
                    </div>
                    
                    <div class="summary-detail">
                      <p>
                        <span>Sub total :</span>
                        <span>{{$list[1]}}</span>
                      </p>
                      
                      <p>
                        <span>Delivery :</span>
                        <span id="delivery">{{$list[2]}}</span>
                      </p>
                      
                      <hr />
                      
                      <p class="summary-total">
                        <span>Total in Euros: </span>
                        <span id="total">{{$list[3]}}</span>
                      </p>
                      
                      <p class="dollar-total">
                        <span>Total in Dollars: </span>
                        <span id="dollar-total">{{$list[4]}}</span>
                      </p>
                      
                      <p>
                        <button type="submit" class="btn btn-primary btn-long">
                          <i class="fa fa-money" aria-hidden="true"></i> Procced to checkout
                        </button>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
@endsection

@section('map')    
@endsection

@section('customscripts')    
@endsection

@section('lastscript')
@endsection