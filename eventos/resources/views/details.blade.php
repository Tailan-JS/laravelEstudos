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
		<a href="#modal1" class=" orange btn right modal-trigger"><i class="material-icons prefix">edit</i> Editar</a>


			  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content center">
         	<form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
    		@csrf
    		@method('PUT')
    		<fieldset style="border-radius: 10px">
    			<legend>
      <h4>Editar Evento</h4></legend>
      <div class="row">
      <div class="input-field">
      	<label for="name">Nome do Evento</label>
      	<input type="text" name="name" id="name" value="{{$event->name}}" >	
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
      	<input type="text" name="cidade" id="city" value="{{$event->cidade}}">
      </div>
             <div class="input-field col l6">
      	<input type="date" name="date" id="date" value="{{$event->date->format('d-m-y')}}" >
      </div>

       <div class="input-field col l12 m12">
      	<label for="description">Descricao..</label>
      	<textarea class="materialize-textarea" id="description" name="description">{{$event->description}}</textarea>
      </div>

      <div class="col l16 m6">
      <div class="input-field right">
      <input class="btn green modal-close" type="submit" value="confirmar">
  </div>
</div>

  <div class="col l6 l6">
  <div class="input-field left">
  	<input type="reset" class="btn modal-close red" value="cancelar">
  </div>
</div>
      </div>
      
  </fieldset>
  </form>
    </div>
  </div>
	</div>

                   <!-- --->
		<div class="col l6">
			<form action="/events/{{$event->id}}" method="POST">
				@csrf
				@method('DELETE')
		<button type="submit" class=" red btn left"><i class="material-icons prefix">delete</i> Deletar</button>
	</form>
	</div>
</div>
</div>

</div>

@endsection