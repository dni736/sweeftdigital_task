@extends('layouts.app')

@section('content')
	<a href="/products" class="btn btn-info" style="margin-top: 5px;">Go Back</a>
	<h1>Create Product</h1>
	{!! Form::open(['action'=>'ProductController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
    		{{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
    	</div>
    	<div class="form-group ckeditor">
    		{{Form::label('description', 'Description')}}
    		{{Form::textarea('description', '', ['class'=>'form-control', 'placeholder'=>'Description'])}}
    	</div>
		<div class="form-group">
    		{{Form::label('price', 'Price')}}
			{{Form::select('currency', ['GEL' => 'GEL', 'USD' => 'USD', 'EUR' => 'EUR'], 'GEL')}}
    		{{Form::number('price', '', ['class'=>'form-control', 'step'=>'any', 'placeholder'=>'Price'])}}
    	</div>
		{{Form::submit('Submit', ['class'=>'btn btn-info'])}}
	{!! Form::close() !!}
@endsection()