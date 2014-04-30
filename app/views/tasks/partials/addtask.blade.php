<div class="form-group">
	
	{{ Form::label('title','Task') }}
	
	{{ Form::text('title', null, ['class' => 'form-control']) }}
	
	{{ $errors->first('title') }}

</div>

<div class="form-group">
	
	{{ Form::label('note','Note') }}
	
	{{ Form::textarea('note', null, ['class' => 'form-control']) }}

	{{ $errors->first('note') }}

</div>

<div class="form-group">
	
	{{ Form::label('user_id','Assign To') }}
	
	{{ Form::select('user_id', $users, (isset($backButton) ? $task->user_id : null), ['class' => 'form-control']) }}

</div>

<div class="row">

	<div class="form-group col-md-6">
	
		{{ Form::submit((isset($submitButton) ? $submitButton : 'Create Task'), ['class' => 'btn btn-primary']) }}
		
		@if(isset($deleteButton))
			
			{{ link_to('tasks/delete/' . $task->id, 'Delete Task', ['class' => 'btn btn-danger']) }}
			
		@endif
		
	</div>
	
	<div class="col-md-6 text-right">
		
		@if(isset($backButton))

			{{ link_to(URL::previous(), 'Back', ['class' => 'btn btn-default']) }}

		@endif
		
	</div>

</div>
