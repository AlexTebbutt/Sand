<!doctype html>
<html>

	<head>

		<meta charset="utf-8">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		{{ HTML::style('css/styles.css') }}

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>		

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	</head>
	
	<body>
	
		<div class="container">
		
			<div class="row">
		
				<div class="col-md-6 col-md-push-3">
			
					<div class="content-box login-form">
				
						<h1 class="page-title">Login</h1>
						
						{{ Form::open(['route' => 'auth']) }}
						
							<div class="form-group">
				
						{{ Form::label('username', 'Username', [ 'class' => 'control-label' ]) }} {{ Form::text('username', null, ['class'=>'form-control', 'placeholder' => 'Email Addresss'])}}
				
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
		
		</div>

	</body>
	
</html>