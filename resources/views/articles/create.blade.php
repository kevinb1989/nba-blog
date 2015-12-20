@extends('template')

@section('title')
	Add a new article
@stop

@section('content')
<h1>Create A New Article</h1>
<hr/>
	{!! Form::open(['action' => 'ArticlesController@store']) !!}
		<div class="form-group">
			{!! Form::label('title', 'Title: ') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('body', 'Body: ') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('published_at', 'Published at: ') !!}
			{!! Form::input('date', 'published_at', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('add new', ['class' => 'btn btn-default']) !!}
		</div>

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