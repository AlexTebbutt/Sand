@extends('layouts.master')

@section('content')

<div class="row">

  <div class="col-md-6">

		<h2>Tasks</h1>
		
		<ul class="list-group">
		
		@foreach($tasks as $task)
		
			<li class="list-group-item">
				
				<a href="/{{ $task->user->username }}/tasks">&nbsp;<img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->email }}" width="40" ></a>

				{{ link_to_task($task) }}
				
			</li>
		
		@endforeach
		
		</ul>

  </div>

  <div class="col-md-6">

		<h2>Add New Task</h3>


		{{ Form::open(['url' => '/tasks', 'class' => 'form']) }}

			@include('/tasks/partials/addtask', ['backButton' => TRUE])

		{{ Form::close() }}
	  
  </div>

</div>	

@stop