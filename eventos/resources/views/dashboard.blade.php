@extends('layouts.main')
@section('content')
<main>
<div class="card row">
    <div class="card col l10 push-l1">
    <h4 class="center col l12">Meus Eventos</h4>
    <!--   Tabela de Eventos-->
    <table>
        <thead>
            <tr>
                <th style="width: 5%;">id</th>
                <th style="width: 50%;">Nome</th>
                <th style="width: 5%;">actions</th>
                <th style="width: 5%;"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$event->name}}</td>
                <!--- função de edição ------>
                <td>        <a href="#modal1" class=" orange btn right modal-trigger"><i class="material-icons prefix">edit</i> </a>


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
        <label for="city">Cidade do Eventoo</label>
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
  </div></td>

                <!----- --------->
                <td>  
            <form action="/events/{{$event->id}}" method="POST">
                @csrf
                @method('DELETE')
        <button type="submit" class=" red btn left"><i class="material-icons prefix">delete</i></button>
    </form>
    </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
</div>

       

  <!-- criação de eventos -->
    <div class="create center">
         <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Criar Novo Evento</a>

  <!-- Modal Structure -->
  <div id="modal2" class="modal">
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

       <div class="input-field col l6">
        <label for="city">Cidade do Evento</label>
        <input type="text" name="city" id="city">
      </div>
             <div class="input-field col l6">
        <input type="date" name="date" id="date">
      </div>
      <div class="col l6 ">
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


      <div class="input-field col l12">
          <input type="hidden" name="owner" value="{{$user->name}}">
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

</main>
@endsection