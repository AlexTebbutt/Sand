@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-md-12">
	
		<h1>Edit {{ $project->name }}</h1>

		{{ Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->id], 'class' => 'form']) }}

			@include('projects/partials/_form', ['submitText' => 'Update Project'])
		
		{{ Form::close() }}

	</div>
	
</div>

@stop