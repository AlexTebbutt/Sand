<!doctype html>
<html>

	<head>

		<meta charset="utf-8">
		
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	</head>

	<body>
	
		<div class="container">
	
			<header>
			
				@include('layouts.partials.nav')
			
			</header>
	
			@yield('content')
			
		</div>

	</body>

</html>