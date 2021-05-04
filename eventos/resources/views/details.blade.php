@extends('layouts.main')

@section('content')
<div class="row container">
	<div class="card col l12" style="padding:0px;">
	<div class="medium card left col l5 m7">
		<img src="/img/events/{{$event->img}}" style="width: 100%; height: 100%;">
	</div>
	<div class="card info col l7 m5 medium">
		<h3 class="card-title center">Dados do Evento</h3>
		<h5>Nome:</h5>
		<p style="text-indent: 50px">{{$event->name}}</p>
		<h5 >Criador:</h5>
		<p style="text-indent: 50px">Usuário Teste</p>
		<h5>Descricao:</h5>
		<p style="text-indent: 50px">{{$event->description}}</p>

		<div class="col l6">

	</div>

                   <!-- --->

</div>
</div>

</div>

@endsection