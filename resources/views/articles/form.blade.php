
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
			{!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'Multiple']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit($submitButtonText, ['class' => 'btn btn-default']) !!}
		</div>