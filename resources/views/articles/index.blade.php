@extends('app')

@section('content')
	<h1>Articles</h1>
	<hr/>
	@if(count($articles))
	<article>
		@foreach($articles as $article)
			<h3>
				<a href="{{url('/articles',$article->id)}}">{{$article->title}}</a>
			</h3>
			<div>
				{{$article->body}}
			</div>
		@endforeach
	</article>
	@endif
@stop
