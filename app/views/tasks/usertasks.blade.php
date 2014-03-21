@extends('layouts.master')

@section('content')
	
<h1>All Tasks</h1>

<ul class="list-group">

@foreach($users as $user)

	<li class="list-group-item">
	
		<h2>{{ $user->username }}</h2>
	
		<ul class="list-group">	
	
		@foreach($user->tasks as $task)
		
			<li class="list-group-item">
				
				<a href="/{{ $task->user->username }}/tasks"><img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->email }}" width="60" ></a>
			
				{{ link_to('tasks/' . $task->id, $task->title) }}
				
			</li>
		
		@endforeach
	
		</ul>
		
	</li>
	
@endforeach

</ul>

<h3>Add A Task</h3>

@include('tasks/partials/addtask')

@stop