
<!-- Temporary! -->
{!! Form::hidden('user_id', 1) !!}
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
			{!! Form::label('tag_list', 'Tags: ') !!}
			{!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'Multiple']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit($submitButtonText, ['class' => 'btn btn-default']) !!}
		</div>

@section('footer')
	<script>
		$('#tag_list').select2({
			placeholder: 'choose a tag',
			tags: true,
			data: [
				{id: 'detroit_pistons', text: 'Detroit Pistons'},
				{id: 'washington_wizards', text: 'Washington Wizards'}
			]
		});
	</script>
@endsection
