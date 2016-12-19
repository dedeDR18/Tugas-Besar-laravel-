
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Welcome</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
      body {
    background-image: url("images/restorant.jpg");
}
    </style>
  
</head>
<body>
 <div class="app">
  <nav class="transparent" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{ url('/') }}" class="brand-logo"><img src="images/logokecil.png"></a>
      <ul class="right hide-on-med-and-down">
      @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Home</a></li>
                            <li><a href="{{ url('/login') }}">Menu</a></li>
                            <li><a href="{{ url('/login') }}">Reservasi</a></li>
                            <li><a href="{{ url('/login') }}">Contact</a></li>
                            <li><a href="{{ url('/login') }}">About</a></li> 
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            <li><a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                              </li>
                                
                            </li>
                        @endif
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center white-text">Selamat Datang</h1>
      <div class="row center">
        <h5 class="header col s12 light">Selamat menikmati menu yang kami hidangkan</h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Pesan Sekarang</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
  <!-- kosongg -->
  <!--
  <div class="section">

<div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">Lihat</a>
    </div>
    <div class="carousel-item green darken-4 white-text" href="#one!">
      <h2>Favorit</h2>
      <p class="white-text"><img src="http://lorempixel.com/800/400/food/1"></p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Favorit</h2>
      <p class="white-text"><img src="http://lorempixel.com/800/400/food/2"></p>
    </div>
    <div class="carousel-item purple accent-4 white-text" href="#three!">
      <h2>Favorit</h2>
      <p class="white-text"><img src="http://lorempixel.com/800/400/food/3"></p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Favorit</h2>
      <p class="white-text"><img src="http://lorempixel.com/800/400/food/4"></p>
    </div>
  </div>






    </div>
    -->

    <br><br>
   
   


    <div class="section">

    </div>
  </div>

  <footer class="page-footer">
    
      

<!--
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    -->
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
  </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script> $('.carousel.carousel-slider').carousel({full_width: true});</script>

  </body>
</html>
