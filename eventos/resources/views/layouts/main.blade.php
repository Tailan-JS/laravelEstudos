<!DOCTYPE html>
<html>
<head>
	<title>OtakuWorld</title>
	<meta charset="utf-8">
     <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/CSS/style.css">
</head>
<body>
	<header>
    <nav>
    <div class="nav-wrapper black" style="height: 70px">
      <a href="#" class="brand-logo" >OtakuWorld.<span>com</span></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="large material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down Unav">
        <li><a href="/">Home</a></li>
        <li><a href="/events">Eventos</a></li>
        @guest
        <li><a href="/login">Login</a></li>
        @endguest
        @auth
         <li><a href="/dashboard">Meus Eventos</a></li>
          <li><form action="/logout" method="POST">
            @csrf
            <a href="#" onclick="this.closest('form').submit();" >logout</a>
          </form></li>
        @endauth
      </ul>
    </div>
  </nav>

   <ul class="sidenav black Unav" id="mobile-demo">
    <li ><a href="/" class=" white-text">Home</a></li>
    <li><a href="/events" class=" white-text">Eventos</a></li>
    @auth
       <li><a href="/dashboard" class="white-text">Meus Eventos</a></li>
     <li><form action="/logout" method="POST">
            @csrf
            <a href="#" class="white-text" style="padding-left: 40px;" onclick="this.closest('form').submit();" >logout</a>
          </form></li>
          @endauth
    @guest
    <li><a href="/login" class=" white-text">Login</a></li>
    @endguest
  </ul>
	</header>
	@yield('content')
<footer class="page-footer black" style="margin-top: 25px;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5>Página Fake</h5>
                <p class="grey-text text-lighten-4">Página deenvolvida com o objetivo de realizar estudos acerca do funcionamento de um framework de desenvolvimento web, todos os eventos aqui contidos são fictícios</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://github.com/Tailan-JS" target="blank" >Github</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 developed by Tailan-js
            </div>
          </div>
        </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="/Js/action.js"></script>
</body>
</html>