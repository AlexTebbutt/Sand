@extends('layouts.masters.dashboard')

@section('scripts')		
{{ HTML::script('js/functions.js') }}
@stop

@section('updates')
<div class="update-detail">

	<div class="row">
	
		<div class="col-md-12">
			
			<h4>Recent Updates</h2>
			
			<p>SOme copy</p>
		
			<p>SOme copy</p>
			
			<p>SOme copy</p>				
		
			<p>SOme copy</p>

		</div>

	</div>

</div>
@stop

@section('content')

<div class="row">

	<div class="col-md-12">
	
		<div class="row">
			
			<div class="col-md-10">
	
				<h1>Dashboard</h1>
				
			</div>
			
			<div class="col-md-2 text-right">
		
				<a href="" id="update-toggle" class="btn btn-default top-pad-button">Updates</a>
		
			</div>
			
		</div>

	</div>
	
</div>


@stop