@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-md-12">
	
		<h1>Delete {{ $task->title }}</h1>

		{{ Form::open(['method' => 'DELETE', 'url' => 'tasks/' . $task->id, 'class' => 'form']) }}

			<p>Are you sure you want to delete {{ $task->title }}?</p>
			
			{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
			
			{{ link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-default']) }}
		
		{{ Form::close() }}

	</div>
	
</div>

@stop
