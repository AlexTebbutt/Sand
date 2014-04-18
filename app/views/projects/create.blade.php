@extends('layouts.masters.projects')

@section('scripts')		
{{ HTML::style('css/datepicker.css') }}
{{ HTML::script('js/bootstrap-datepicker.js') }}
@stop

@section('content')

<div class="row">

	<div class="col-md-12">
	
		<h1>Create New Project</h1>

		{{ Form::open(['method' => 'POST', 'route' => ['projects.store'], 'class' => 'form']) }}

			@include('projects/partials/_form')
		
		{{ Form::close() }}

	</div>
	
</div>

@stop