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
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<header>
    <nav>
    <div class="nav-wrapper black" style="height: 70px">
      <a href="#" class="brand-logo" >OtakuWorld.<span>com</span></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="large material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down Unav">
        <li><a href="/">Home</a></li>
        <li><a href="events">Eventos</a></li>
        <li><a href="#">Login</a></li>
      </ul>
    </div>
  </nav>

   <ul class="sidenav black Unav" id="mobile-demo">
    <li ><a href="#" class=" white-text">Home</a></li>
    <li><a href="#" class=" white-text">Eventos</a></li>
    <li><a href="#" class=" white-text">Login</a></li>
  </ul>
	</header>
	@yield('content')


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="Js/action.js"></script>
</body>
</html>