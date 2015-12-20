@extends('template')

@section('title')
	{{ $article -> title }}
@stop

@section('content')
			<article>
				<h2>{{ $article -> title }}</h2>
				<p>{{ $article -> body }}</p>
			</article>
@stop