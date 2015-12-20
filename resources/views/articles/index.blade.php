@extends('template')

@section('title')
	latest articles
@stop

@section('content')
	<h1>All Articles</h1>
	@if(count($articles))
		@foreach($articles as $article)
			<article>
				<h2><a href="{{ action('ArticlesController@show', $article -> id) }}">{{ $article -> title }}</a></h2>
				<p>{{ $article -> body }}</p>
			</article>
		@endforeach
	@endif
@stop