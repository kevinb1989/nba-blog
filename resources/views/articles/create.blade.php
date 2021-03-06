@extends('template')

@section('title')
	Add a new article
@stop

@section('content')
<h1>Create A New Article</h1>
<hr/>
	{!! Form::open(['action' => 'ArticlesController@store']) !!}
		@include('articles.form', ['submitButtonText' => 'add new'])
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