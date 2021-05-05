@extends('layouts.main')

@section('content')
<div class="row container">
	<div class="card col l12" style="padding:0px;">
	<div class="medium card left col l5 m7 s12">
		<img src="/img/events/{{$event->img}}" style="width: 100%; height: 100%;">
	</div>
	<div class="card info col l7 m5 s12 medium center">
		<h5 class="card-title center">Dados do Evento</h5>
		<h5>Nome:
		<spam style="text-indent: 50px;font-weight: normal;font-size: .85em;">{{$event->name}}</spam>
  </h5>
  <h5>Craidor:
    <spam style="text-indent: 50px;font-weight: normal;font-size: .85em;">{{$event->owner}}</spam>
  </h5>
  <div style="width: 75%; margin-left: 12%;">
  <h5 >Descrição:
    <spam style="text-indent: 50px;font-weight: normal;font-size: .85em;">{{$event->description}}</spam>
  </h5>
</div>
<form action="/join/{{$event->id}}" method="POST">
  @csrf
  <button type="submit" class="btn orange darken-2" style="line-height: 0px; margin-top: 15px;"><i class="material-icons">check</i> Registrar Presença</button>
</form>
		<div class="col l6">

	</div>

                   <!-- --->

</div>
</div>

</div>

@endsection