<?php

	Event::listen('project.created', function()
	{
		
		$update = New Update();
		
		$update->user_id = Auth::user()->id;
		$update->message = 'New Project Created';

		$update->save();
		
	});
		
?>