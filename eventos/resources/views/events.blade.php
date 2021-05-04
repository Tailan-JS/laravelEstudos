@extends('layouts.main')

@section('content')

<main>
<div class="card blue darken-3" style="margin:-22px 0px 3px 0px;">
	<h3 class="center">Próximos eventos:</h3>
</div>
@if(count($events) == 0)
<p class="center" style="font-size: 2em;">Sem eventos disponíveis</p>
@endif
@if($search != '')
	<p class="center" style="font-size: 2em;" >Resultados da Pesquisa por '{{$search}}' <a href="events">ver todos</a>	</p>
	@endif
<div id="eventCards" class="row">

	@foreach($events as $event)
	<div class=" col l3 m6">
		<div class=" small card">
			<div class="card-image">
				<img src="img/events/{{$event->img}}">
			</div>
		<div class="card-content">
			<a class="btn-floating waves-effect waves-light blue darken-3 right" href="events/{{$event->id}}"><i class=" material-icons">add</i></a>

			<p class="card-title">{{$event->name}}</p>
			<p>criador: {{$event->owner}}</p>
	</div>
	</div>
	</div>
	@endforeach

</div>

</main>
@endsection