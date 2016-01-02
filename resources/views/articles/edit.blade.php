@extends('template')

@section('title')
	Edit an article
@stop

@section('content')
<h1>Edit: {{ $article -> title }}</h1>
<hr/>
	{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article -> id]]) !!}
		@include('articles.form', ['submitButtonText' => 'update the article'])

	{!! Form::close() !!}

	@if($errors -> any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors -> all() as $message)
					<li>{{ $message }}</li>
				@endforeach
			</ul>
		</div>
	@endif
@stop