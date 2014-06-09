@extends('layouts.masters.projects')

@section('scripts')		
{{ HTML::style('css/datepicker.css') }}
{{ HTML::script('js/bootstrap-datepicker.js') }}
{{ HTML::script('js/functions.js') }}
@stop

@section('content')

<div class="row" ng-app="projectsApp">

	<div class="col-md-12">
	
		<h1>Create New Project</h1>

		{{ Form::open(['method' => 'POST', 'route' => ['projects.store'], 'class' => 'form']) }}

			@include('projects/partials/_form', ['HideProjectNotes' => TRUE])
		
		{{ Form::close() }}

	</div>
	
</div>

@stop