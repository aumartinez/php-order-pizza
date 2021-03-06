@extends('temp.master')

@section('title', 'Welcome')

@section('body')
      <div class="top-banner bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <nav id="goodies-nav" role="navigation">
                <!-- Goodies icons -->
              </nav>
            </div>
          </div><!-- /.row -->
        </div>
      </div><!-- /.top-banner -->
      
      <div class="bg-hero">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="title-wrapper">
                <div class="hero-title">
                  <h1>
                    Just the Best Pizza in Town!
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.bg-hero -->
      
      <div id="featured" class="bg-secondary">      
      </div>
      
      <div id="pizza-sets">
      </div>
      
      <div id="promotion" class="bg-promo">
      </div>
      
      <div id="today-pizza">
      </div>
      
      <div id="prefooter">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <div class="pre-card">
                <p class="text-center banner-icon">
                 <i class="po po-best-quality"></i>
                </p>
                <h4>
                  Best Quality
                </h4>
                
                <p class="pre-card-body text-center">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </p>
              </div><!-- /.pre-card -->
            </div>
            
            <div class="col-sm-3">
              <div class="pre-card">
                <p class="text-center banner-icon">
                 <i class="po po-on-time"></i>
                </p>
                <h4 class="tex-center">
                  On Time
                </h4>
                
                <p class="pre-card-body text-center">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </p>
              </div><!-- /.pre-card -->
            </div>
            
            <div class="col-sm-3">
              <div class="pre-card">
                <p class="text-center banner-icon">
                 <i class="po po-master-chef"></i>
                </p>
                <h4 class="tex-center">
                  Master Chefs
                </h4>
                
                <p class="pre-card-body text-center">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </p>
              </div><!-- /.pre-card -->
            </div>
            
            <div class="col-sm-3">
              <div class="pre-card">
                <p class="text-center banner-icon">
                 <i class="po po-ready-delivery"></i>
                </p>
                <h4 class="tex-center">
                  Taste Food
                </h4>
                
                <p class="pre-card-body text-center">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </p>
              </div><!-- /.pre-card -->
            </div>
          </div><!-- /.row -->
        </div>
      </div>
      
      <div id="ajax">
      </div>
@endsection

@section('map')
    <div class="bottom-btn text-center">
      <a href="/#map" data-toggle="collapse" data-target="#map" class="btn btn-primary">Find Us!</a>
    </div>
    
    <div id="map" class="hidden-map collapse">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.998412670482!2d-86.09848288529338!3d11.974611291515428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f74079bcc08d791%3A0xe3a20446586351a!2sDeliPizza!5e0!3m2!1sen!2sus!4v1588268634205!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
@endsection