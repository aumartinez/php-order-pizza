<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DeliPizza Online | @yield('title')</title>
    
    <meta name="description" content="DeliPizza Online" />    
    <meta name="author" content="Augusto Martinez" />
		<!-- link to main stylesheets -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="/css/fontawesome.css" type="text/css" />
    <link rel="stylesheet" href="/css/pizza-icons.css" type="text/css" />
    <link rel="stylesheet" href="/css/global.css" type="text/css" />
    
    <!-- scripts -->    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	</head>
  <body class="bg-body">
    <script src="/js/loader.js"></script>
    <!-- HTML start -->
    <header class="bg-primary">
      <!-- top navigation -->
    </header>
    
    <section class="body-cont">
      @section('body')
      @show
    </section>
    
    <footer class="bg-footer">
      <div id="pizza-banner">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <nav id="social-nav" role="navigation" class="social-links">
              <!-- social nav links -->
            </nav>
          </div>
        </div>
        
        <div class="row">
          <h2 class="text-center color-white brand">
            DeliPizza
          </h2>
        </div>
        
        <div class="row">
          <div class="col-xs-12">
            <ul class="address">
              <li>
                DeliPizza
              </li>
              <li>
                Iglesia de la Asuncion, 2c al norte
              </li>              
              <li>
                Telephone: +1 555 1234
              </li>
            </ul>
          </div>
        </div>
        
        <div class="row">
          <div class="col-xs-12 copyright">
            <p class="text-center">
              Copyright © 2020
            </p>
          </div>
        </div>
      </div>
    </footer>
    
    @section('map')
    @show
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- load React API -->
    <script type="text/javascript" src="/js/react.production.min.js"></script>
    <!-- load React DOM -->
    <script type="text/javascript" src="/js/react-dom.production.min.js"></script>    
    <!-- Load Babel Compiler -->
    <script type="text/javascript" src="/js/babel.min.js"></script> 
    <!-- Load BootStrap Components -->
    <script type="text/javascript" src="/js/react-bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/babel" src="/js/babel.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
  </body>  
</html>