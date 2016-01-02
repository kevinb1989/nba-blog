
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
			{!! Form::submit($submitButtonText, ['class' => 'btn btn-default']) !!}
		</div>