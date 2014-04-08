@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-md-12">
	
		<h1>Create New Project</h1>

		{{ Form::open(['method' => 'POST', 'route' => ['projects.store'], 'class' => 'form']) }}

			@include('projects/partials/_form', ['submitText' => 'Update Client']);
		
		{{ Form::close() }}

	</div>
	
</div>

@stop