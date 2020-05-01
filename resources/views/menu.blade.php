@extends('temp.master')

@section('title', 'Menu')

@section('body')
    <div class="bg-menu menu-wrapper">
      <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h1 class="menu-title text-center">
                Choose your favorite flavor!
              </h1>
            </div>
          </div>          
      </div>
      
      <div class="container menu-card">
        <div class="row">
          @foreach ($pizzas as $pizza)
            <div class="col-md-6 menu-item">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="menu-pic img-center">
                      <img src="img/{{$pizza->prod_id}}.png" class="img-responsive" alt="{{$pizza->prod_name}}" />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="menu-caption">
                      <h2>
                        {{$pizza->prod_name}}
                      </h2>
                      <p>
                        {{$pizza->prod_description}}
                      </p>
                      
                      <a href="/pizza/{{$pizza->prod_id}}" class="btn btn-primary">
                        <span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> <span>Check it out</span>
                      </a>
                    </div>
                  </div>
                </div><!-- /.row -->
              </div><!-- /.menu-item -->
          @endforeach
        </div>
      </div>
    </div>
@endsection

@section('map')    
@endsection