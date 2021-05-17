@extends('layouts.main')

@section('content')
<div class="row center" id="mainIndex">
	<div class="center col l7 push-l3" style="text-shadow: 2px 2px 2px gray;">
	<h3 class=" white-text">Encontre o que deseja ou anuncie seus produtos aqui na Vitrine.com</h3>
</div>
<div class="input-field center col l6 push-l3" id="searchDiv">
	<i class="material-icons prefix">search</i>
	<label for="search">Econtre o que deseja na Vitrine</label>
<input type="text" name="search" id="search" >
</div>
</div>
@endsection