<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Welcome</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <style>
       header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }

  </style>
  <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  
</head>
<body>
<div class="app">
<header>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Dashboard</a>
      <ul class="right hide-on-med-and-down">
      @if (Auth::guest())
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
  </header>
     
    <ul id="slide-out" class="side-nav fixed">
       <li>
           <div class="userView">
              <div class="background">
                 <img src="images/background.jpg">
             </div>
           <a href="#!user"><img class="circle" src="images/adminh.jpg"></a>
           <a href="#!name"><i class="material-icons">person_pin</i> {{ Auth::user()->name }}</a>
           </div>
       </li>

    <li><a href="#!"><i class="material-icons">supervisor_account</i>User</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>Cloud</a></li>
    <li><a href="#!"><i class="material-icons">email</i>Email</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

    </li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
     
<main>     
<table class="centered">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Email</th>
              <th data-field="price">Role</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($tampilkan as $tampilkans)
          <tr>
            <td>{{ $tampilkans->name }}</td>
            <td>{{ $tampilkans->email }}</td>
            <td>{{ $tampilkans->role }}</td>
          </tr>
         @endforeach
        </tbody>
      </table>


</main>   








  </div>



<!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script> 
  $(".button-collapse").sideNav();</script>

</body>
</html>