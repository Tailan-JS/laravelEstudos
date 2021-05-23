@extends('layouts.main')
@section('content')
<div class="row container">
<div class="medium card row">
	<img class="col l6 m8 s12 push-m2" src="/img/products/{{$product->image}}" style="height: 100%;">
	<div class="col l6 m12 s12 card-panel center" style="margin: 0px;box-shadow: 0px 0px 0px white;">
		<p class="card-title">{{$product->name}}</p>
		<p style="margin: -10px;"><i class="material-icons prefix">person</i> vendedor: {{$product->dealer}}</p>
		<p style="font-size:1.2em;">{{$product->description}}</p>
		
		<div class="center row">

			<p class="brown-text darken-text-1" style="font-size: 1.4em;" > Preço: R${{$product->price}}</p>
			<div class="input-field push-l1 push-m2 col l3 qtd"><input type="number" name="qtd"></div>
			<a class="btn green darken-2"  style="line-height: 250%;height: 40px;"><i class="material-icons prefix">shopping_cart</i> Adicionar ao Carrinho</a>
		</div>
		
	</div>
</div>
</div>


@endsection