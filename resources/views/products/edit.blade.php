@extends('layouts.app')

@section('content')
    <a href="/products/{{ $product->id }}" class="btn btn-info" style="margin-top: 5px;">Cancel</a>
    <h1>Edit Product</h1>
    {!! Form::open(['action' => ['ProductController@update', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $product->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $product->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::select('currency', ['GEL' => 'GEL', 'USD' => 'USD', 'EUR' => 'EUR'], $product->currency)}}
            {{Form::number('price', $product->price, ['class'=>'form-control', 'step'=>'any', 'placeholder'=>'Price'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-info'])}}
    {!! Form::close() !!}
@endsection