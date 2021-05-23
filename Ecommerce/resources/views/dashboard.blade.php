@extends('layouts.main')
@section('content')
<div class="row">
	<div class="col l3 grey lighten-4 card" id="aside" >
		<img src="img/sem-imagem-avatar.png">
		<p class="card-title" style="margin: 0px;">{{$user->name}}</p>
		<p style="margin: 0px;">{{$user->email}}</p>
		<div class="center" style="margin: 20px;">
			<a class="modal-trigger" href="#formAnuncio"><button class="btn yellow darken-3">Anunciar um Produto</button></a>
			<!-- Modal Structure -->
			<div id="formAnuncio" class="modal">
				<div class="modal-content">
					<fieldset>
						<legend> <h4>Dados de Cadastro</h4></legend>
						<form method="POST" action="products/add" enctype="multipart/form-data" >
							@method('POST')
							@csrf
							<div class="row">
								<div class="input-field col l12">
									<label for="name">Nome</label>
									<input type="text" id="name" name="name">
								</div>
								<div class="input-field col l6">
									<label for="preco">Preco</label>
									<input type="number" name="preco" id="preco">
								</div>
								<div class="input-field col l6">
									<label for="quantidade">quantidade</label>
									<input type="number" name="quantidade" id="quantidade">
								</div>

								<div class="file-field input-field col l6">
									<div class="btn">
										<span>Imagem</span>
										<input type="file" name="image" id="image">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text">
									</div>
								</div>
								<div class="input-field col l12">
									<label for="description">Descrição</label>
									<textarea id="description" name="description" class="materialize-textarea"></textarea>
								</div>
							</div>


							<div class="col l12">
							<input type="submit" class="btn green darken-1" name="sumbit" value="Anunciar">
							<input type="reset" class="btn red modal-close" value="cancelar">
						</div>
						</form>
					</fieldset>
				</div>
			</div>
		</div>
	</div>


	<div class="col l9 main">
		@foreach($products as $product)
		<table class="center container">
			<thead>
				<th>Nome</th>
				<th>Preco</th>
				<th></th>
			</thead>
			<tbody>
				<td>nome</td>
				<td>121</td>
				<td width="10"><a class="btn red" href=""><i class="material-icons prefix">delete</i>Remover</a></td>
			</tbody>
		</table>
		@endforeach
	</div>
	
</div>
@endsection
