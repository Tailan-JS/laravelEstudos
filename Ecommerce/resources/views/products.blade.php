@extends('layouts.main')
@section('content')

<div class="row">
	@foreach($products as $product)
	<div class="col l3">
		<a href="/details/{{$product->id}}">
	<div class=" small card" style="padding: 0px;">
		<div class="card-image" style="padding: 2px;">
			<img src="img/products/{{$product->image}}" style="width: 100%;">
		</div>
		<div class="card-content">
			<p class="card-title grey-text text-darken-2">{{$product->name}}</p>
			<p class="left grey-text text-darken-2">R${{$product->price}}</p>
			<a class="waves-effect waves-light btn right blue darken-1 cardCartBtn"><i class="large material-icons">shopping_cart</i></a>
		</div>
	</div>
</a>
</div>
@endforeach
</div>

@endsection