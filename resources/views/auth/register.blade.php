@extends('template')

@section('title')
  registration
@stop

@section('content')
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    {!! Form::open() !!}
      <div class="control-group">
        <!-- Username -->
        {!! Form::label('name', 'Name: ', ['class' => 'control-label']) !!}
        <div class="controls">
          {!! Form::text('name', null, ['id' => 'name', 'class' => 'input-xlarge']) !!}
          <p class="help-block">Username can contain any letters or numbers, without spaces</p>
        </div>
      </div>
   
      <div class="control-group">
        <!-- E-mail -->
        {!! Form::label('email', 'Email: ') !!}
        <div class="controls">
          {!! Form::text('email', null, ['id' => 'email', 'class' => 'input-xlarge']) !!}
          <p class="help-block">Please provide your E-mail</p>
        </div>
      </div>
   
      <div class="control-group">
        <!-- Password-->
        {!! Form::label('password', 'Password: ') !!}
        <div class="controls">
          {!! Form::password('password', ['id' => 'password', 'class' => 'input-xlarge']) !!}
          <p class="help-block">Password should be at least 4 characters</p>
        </div>
      </div>
      <div class="control-group">
        <!-- Password-->
        {!! Form::label('confirm_password', 'Confirm Password: ') !!}
        <div class="controls">
          {!! Form::password('confirm_password', ['id' => 'password', 'class' => 'input-xlarge']) !!}
        </div>
      </div>

      <div class="control-group">
        {!! Form::submit('submit', ['class' => 'btn btn-success']) !!}
      </div>
      {!! Form::close() !!}
@stop

