@extends('layouts.masters.projects')

@section('scripts')		
{{ HTML::style('css/datepicker.css') }}
{{ HTML::script('js/bootstrap-datepicker.js') }}
@stop

@section('content')

<div class="row">

	<div class="col-md-12">
	
		<h1>Delete {{ $project->name }}</h1>

		{{ Form::open(['method' => 'DELETE', 'url' => 'projects/' . $project->id, 'class' => 'form']) }}

			<p>Are you sure you want to delete {{ $project->name }}?</p>
			
			{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
			
			{{ link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-default']) }}
		
		{{ Form::close() }}

	</div>
	
</div>

@stop