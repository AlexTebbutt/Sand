@extends('layouts.master')

@section('content')

<div class="row">

  <div class="col-md-6 col-md-offset-3">

		<h2>Edit Task</h2>
				
		{{ Form::model($task, ['method' => 'PATCH', 'route' => ['tasks.update', $task->id], 'class' => 'form']) }}

			@include('/tasks/partials/addtask', ['submitButton' => 'Update Task', 'backButton' => TRUE, 'deleteButton' => TRUE])
		
		{{ Form::close() }}
 
  </div>

</div>	

@stop
