{{ Form::open(['url' => '/tasks', 'class' => 'form']) }}

	<div class="form-group">
		
		{{ Form::label('title','Task') }}
		
		{{ Form::text('title', null, ['class' => 'form-control']) }}

	</div>

	<div class="form-group">
		
		{{ Form::label('note','Note') }}
		
		{{ Form::textarea('note', null, ['class' => 'form-control']) }}

	</div>
	
	<div class="form-group">
		
		{{ Form::label('user_id','Assign To') }}
		
		{{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}

	</div>
	
	<div class="form-group">
	
		{{ Form::submit('Create Task', ['class' => 'btn btn-primary']) }}
		
	</div>
	

{{ Form::close() }}