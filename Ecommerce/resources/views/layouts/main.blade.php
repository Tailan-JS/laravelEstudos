<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title></title>
	<meta charset="utf-8">

	 <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link rel="stylesheet" type="text/css" href="css/desktop.css">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/desktop.css">
</head>
<body>
<header>
	 <nav class="green lighten-1">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">Vitrine.com</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        <li><a href="#">Produtos</a></li>
        @guest
        <li><a href="/login">Login</a></li>
        <li><a href="/register">register</a></li>
        @endguest
        @auth
        <li><form action="/logout" method="POST">
            @csrf
            <a href="#" onclick="this.closest('form').submit();" >logout</a>
          </form></li>

        @endauth
      </ul>
    </div>
  </nav>
</header>
<main>
	@yield('content')
</main>


<footer class="page-footer green lighten-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Layout de estudos</h5>
                <p class="grey-text text-lighten-4">página fake dedicada a estudos em Laravel</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">github</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">linkedin </a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Developed by Tailan_js
            </div>
          </div>
        </footer>

<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
<script type="text/javascript" src="js/actions.js"></script>
</body>
</html>