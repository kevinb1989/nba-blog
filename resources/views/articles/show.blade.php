@extends('template')

@section('title')
	{{ $article -> title }}
@stop

@section('content')
			<article>
				<h2>{{ $article -> title }}</h2>
				<p>{{ $article -> body }}</p>
				<h4>Tags</h4>
				<ul>
					@foreach($article -> tags() -> get() as $tag)
						<li>{{ $tag -> name }}</li>
					@endforeach
				</ul>
			</article>
@stop