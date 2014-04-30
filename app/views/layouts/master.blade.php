<!doctype html>
<html>

	<head>

		<meta charset="utf-8">
		
		<title>Projects Tool | Diginut</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		{{ HTML::style('css/styles.css') }}

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>		

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

		@yield('scripts')

	</head>

	<body>
	
		<div class="container">
	
			@if(Auth::check())
			
			<header>
			
				@include('layouts.partials.nav')
				
				@yield('secondary nav')
			
			</header>
			
			@endif
			
			@yield('content')
			
		</div>

	</body>

</html>