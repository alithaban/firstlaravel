@extends('app')

@section('content')
	<h1>Creating a New Article</h1>
	<hr/>
	{!! Form::open(['url'=>'articles']) !!}
		@include('articles.partials._form', ['submitBtnTitle'=>'Add Article'])
	{!! Form::close() !!}
	
	@include('errors.errors')
@stop
