@extends('layouts.masters.projects')

@section('scripts')		
{{ HTML::style('css/datepicker.css') }}
{{ HTML::script('js/bootstrap-datepicker.js') }}
{{ HTML::script('js/functions.js') }}
@stop

@section('content')

<div class="row">

	<div class="col-md-12">
	
		<div class="row">
			
			<div class="col-md-10">
	
				<h1>Edit {{ $project->name }}</h1>
				
			</div>
			
			<div class="col-md-2 text-right">
		
				{{ link_to(URL::previous(), 'Back', ['class' => 'btn btn-default top-pad-button']) }}
		
			</div>
			
		</div>

		{{ Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->id], 'class' => 'form']) }}

			@include('projects/partials/_form', ['submitText' => 'Update Project', 'deleteButton' => TRUE, 'duplicateButton' => TRUE])
		
		{{ Form::close() }}

	</div>
	
</div>

<div class="row">

	<div class="col-md-12">
	
		@include('projects/partials/_costingForm', ['showAllCostings' => TRUE])
	
	</div>
	
</div>

<div class="row">

	<div class="col-md-12">
	
		@include('projects/partials/_projectNotesForm', ['showAllCostings' => TRUE])
	
	</div>
	
</div>
@stop