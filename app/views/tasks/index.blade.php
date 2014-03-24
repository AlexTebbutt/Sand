@extends('layouts.master')

@section('content')


<div class="row">

  <div class="col-md-6">

		<h2>All Tasks</h1>
		
		<ul class="list-group">
		
		@foreach($tasks as $task)
		
			<li class="list-group-item">
				
				<a href="/{{ $task->user->username }}/tasks"><img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->email }}" width="60" ></a>
			
				{{ link_to_task($task) }}
				
				{{ Form::open([''method' => 'PATCH', 'route' => ['task.update']]) }}
				
					{{ Form::checkbox('completed') }}				
				
				{{ Form::close() }}
				
			</li>
		
		@endforeach
		
		</ul>

  </div>

  <div class="col-md-6">

		<h2>Add New Task</h3>
		
		@if (isset($users))
			
			@include('/tasks/partials/addtask')
		
		@endif	  
	  
  </div>

</div>	

@stop