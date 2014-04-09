<?php

	function gravatar_url($email)
	{
	
		return 'http://www.gravatar.com/avatar/' . md5($email);
		
	}

	function link_to_task(Task $task)
	{
		
		return link_to_route('user.tasks.show', $task->title, [$task->user->username, $task->id]);
		
	}


	function set_active($path, $state = 'active')
	{
		
		if(Request::path() === $path)
		{
	
			return 'class="' . $state . '" ';
			
		} 

		
	}
	
	function create_external_link($url, $linkText)
	{
		
		return '<a href="http://' . $url . '" target="_blank">' . $linkText . '</a>';
		
	}
	
	

?>