@extends('template')

@section('title')
    Login Form
@stop

@section('extra-assets')
       <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{ asset('loginform-assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('loginform-assets/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('loginform-assets/css/form-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('loginform-assets/css/style.css') }} ">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ asset('loginform-assets/ico/favicon.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('loginform-assets/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('loginform-assets/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('loginform-assets/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('loginform-assets/ico/apple-touch-icon-57-precomposed.png') }}">
@stop

@section('content')        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Bootstrap</strong> Login Form</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive login form made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
                                {!! Form::open(['role' => 'form', 'class' => 'login-form', 'url' => 'auth/login', 'method' => 'POST']) !!}
			                    	<div class="form-group">
                                        {!! Form::label('email', 'Email', ['class' => 'sr-only']) !!}
			                    		{!! Form::text('email', null, ['placeholder' => 'Email...',
                                             'id' => 'email',
                                             'class' => 'form-username form-control'])!!}
			                        </div>
			                        <div class="form-group">
			                        	{!! Form::label('password', 'Password', ['class' => 'sr-only']) !!}
                                        {!! Form::password('password', ['placeholder' => 'Password...',
                                             'id' => 'password',
                                             'class' => 'form-password form-control'])!!}
			                        	<!-- <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password"> -->
			                        </div>
                                    {!! Form::button('Sign in', ['class' => 'btn', 'type' => 'submit']) !!}
			                        
			                    {!! Form::close() !!}
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="{{asset('loginform-assets/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asset('loginform-assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('loginform-assets/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{asset('loginform-assets/js/scripts.js')}}"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
@stop
    