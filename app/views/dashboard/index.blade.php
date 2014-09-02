@extends('layouts.masters.dashboard')

@section('scripts')		
{{ HTML::script('js/functions.js') }}
@stop

@section('updates')
<div class="update-detail">

	<div class="row">
	
		<div class="col-md-12">
			
			<h4>Recent Updates</h2>
			
			<ul>
				
			@foreach($updates as $update)
				
				<li>{{ $update->created_at }} || {{ $update->message }}</li>
			
			@endforeach
			
			</ul>
			
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
	
<div class="row">	

	<div class="col-md-12">

		<div class="row">
			
			<div class="col-md-3 dashboard-widget">
				
				<h2 class="widget-title">Project Name 1</h2>
				
				<div class="widget-traffic-light" style="background-color: rgb(255,0,0); ">
					
				</div>
				
			</div>
	
			<div class="col-md-3 dashboard-widget">
				
				<h2 class="widget-title">Project Name 2</h2>
				
				<div class="widget-traffic-light" style="background-color: rgb(120,255,0); ">
					
				</div>
				
			</div>

			<div class="col-md-3 dashboard-widget">
				
				<h2 class="widget-title">Project Name 3</h2>
				
				<div class="widget-traffic-light" style="background-color: rgb(0,255,0); ">
					
				</div>
				
			</div>
			
		</div>

	</div>
	
</div>


@stop