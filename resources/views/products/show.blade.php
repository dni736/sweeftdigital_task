@extends('layouts.app')

@section('content')
	<a href="/products" class="btn btn-info" style="margin-top: 5px;">Go Back</a>
	<h1>{{$product->title}}</h1>
	<div>
		{{$product->description}}
	</div>
	<div>
		{{$product->price}}
	</div>
	<div>
		{{$product->currency}}
	</div>
	<hr>
	<a href="/products/{{$product->id}}/edit" class="btn btn-info">Edit</a>
	{!!Form::open(['action' => ['ProductController@destroy', $product->id], 'method' => 'POST', 'class' => 'float-right'])!!}
		{{ Form::hidden('_method', 'DELETE')}}
		{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
	{!! Form::close() !!}

@endsection()