@extends('layouts.main')

@section('content')

<main>
<div class="card blue darken-3" style="margin:-22px 0px 3px 0px;">
	<h3 class="center">Próximos eventos:</h3>
</div>
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
			<p>criador: usuario de teste</p>
	</div>
	</div>
	</div>
	@endforeach

</div>
	<div class="create center">
		 <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Criar Novo Evento</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
    	<form action="/events/add" method="POST" enctype="multipart/form-data">
    		@csrf
    		<fieldset>
      <h4>Detalhes do Evento</h4>
      <div class="row">
      <div class="input-field">
      	<label for="name">Nome do Evento</label>
      	<input type="text" name="name" id="name">	
      </div>

      <div class="col l6">
      <div class=" file-field input-field">
      	<div class="btn">
      <span>File</span>
      	<input type="file" name="image" id="image">
      </div>
       <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Insira imagem">
      </div>
      </div>
  </div>

       <div class="input-field col l6">
      	<label for="city">Cidade do Evento</label>
      	<input type="text" name="city" id="city">
      </div>
             <div class="input-field col l6">
      	<input type="date" name="date" id="date">
      </div>

       <div class="input-field col l12 m12">
      	<label for="description">Descricao..</label>
      	<textarea class="materialize-textarea" id="description" name="description"></textarea>
      </div>
      <div class="col l12 m12">
      <div class="input-field">
      <input class="btn green modal-close" type="submit" value="confirmar">
  </div>
</div>
      </div>
      
  </fieldset>
  </form>
</div>
    </div>
  </div>
	</div>
</main>
@endsection