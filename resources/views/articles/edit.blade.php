@extends('app')

@section('content')
	<h1>Editing {{ $article->title }}</h1>
	<hr/>
	{!! Form::model($article,['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
		@include('articles.partials._form', ['submitBtnTitle'=>'Update Article'])
	{!! Form::close() !!}
	
	@include('errors.errors')
@stop
