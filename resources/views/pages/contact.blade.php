@extends('template')

@section('title')
	Contact Page
@stop

@section('content')
	<h1>Contact People</h1>
	@if(count($users))
		<ul>
			@foreach ($users as $user)
				<li>{{ $user }}</li>
			@endforeach
		</ul>
	@endif
@stop