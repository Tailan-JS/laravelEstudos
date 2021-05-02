@extends('layouts.main')

@section('content')
<main>
	<div id="indexCenter" class="card" >
		<div id="title">
			<h2 class="white-text center title">Busque aqui por Eventos diversos da cultura geek próximos de você!!!</h2>
		</div>
		<form action="events" method="GET">
		<div class="input-field center container search">
			<label for="search"><i class="material-icons ">search</i> </label>
			<input type="text" name="search" id="search">
		</div>
	</form>
	<img src="/img/mugiwaras.jpg">
</div>
</main>
@endsection