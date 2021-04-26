@extends('layouts.app')

@section('content')
	<a href="products/create" class="btn btn-info" style="margin-top: 5px;">Create Product</a>
	<h1>Products: {{ $products->count() }}</h1>
	@if(count($products) > 0)
		@foreach($products as $product)
			<div class="card bg-light p-3" style="margin-bottom: 5px;">
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<h3><a href="/products/{{$product->id}}">{{$product->title}}</a></h3>
					</div>
				</div>
			</div>
		@endforeach
		{{$products->links()}}
	@else
		<p>No products found</p>
	@endif
@endsection()