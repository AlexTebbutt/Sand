@extends('layouts.master')

@section('content')	

<div class="row">

	<div class="col-md-6 col-md-push-3">

		<div class="content-box login-form">
	
			<h1 class="page-title">Login</h1>

			@if(Session::get('login_errors'))						

				<div class="alert alert-danger">
				
					{{ Session::get('login_errors')}}
					
				</div>

			@endif
			
			{{ Form::open(['route' => 'sessions.store']) }}
			
				<div class="form-group">
	
			{{ Form::label('email', 'Email Address', [ 'class' => 'control-label' ]) }} {{ Form::text('email', null, ['class'=>'form-control', 'placeholder' => 'Email Addresss'])}}
	
		</div>
				
				<div class="form-group">
	
			{{ Form::label('password', 'Password', [ 'class' => 'control-label' ]) }} 
			
			{{ Form::password('password', ['class'=>'form-control', 'placeholder'=> 'Password'])}}
	
		</div>
				
				<div class="form-group">
	
			<button type="submit" class="btn btn-primary btn-block btn-login">Login</button>
	
		</div>
			
			{{ Form::close() }}
	
		</div>

	</div>

</div>

@stop