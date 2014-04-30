<?php

	/**
	 * Build a gravatar URL.
	 *
	 * @param  str  $email
	 * @return Full URL
	 */
	function gravatar_url($email)
	{
	
		return 'http://www.gravatar.com/avatar/' . md5($email);
		
	}

	/**
	 * Generate the link to the task URL.
	 *
	 * @param  obj  $task
	 * @return Built link
	 */

	function link_to_task(Task $task)
	{
		
		return link_to_route('user.tasks.edit', $task->title, [$task->user->username, $task->id]);
		
	}

	/**
	 * Set the active class for the relevant nav item.
	 *
	 * @param  str  $path, str $state
	 * @return Class string, if nav is a match for the current page
	 */

	function set_active($path, $state = 'active')
	{
		
		if(Request::path() === $path)
		{
	
			return 'class="' . $state . (isset($classes) ? ' ' . $classes : NULL) . '" ';
			
		} 

		
	}
	
	
	/**
	 * Determine if there secondary nav is required and output if so.
	 *
	 * @return secondary nav name
	 */

	function set_secondary_nav()
	{
		
		if(str_contains(Request::path(), 'project')) return "@include('layouts.partials.projectsnav')";
		
		
	}
	
	
		/**
	 * Create an external link based on the passed URL / text.
	 *
	 * @param  str  $url, str $linkText
	 * @return Built link
	 */
	
	function create_external_link($url, $linkText)
	{
		
		return '<a href="' . $url . '" target="_blank">' . $linkText . '</a>';
		
	}

	/**
	 * Determine which page to redirect to
	 *
	 * @param  str  $redirect
	 * @return path / page to redirect to.
	 */
	 
	function check_redirect($redirect)
	{
		
		if(Session::has('redirect'))
		{

			$redirect = Session::get('redirect');
			Session::forget('redirect');
			
		}
		
		return $redirect;
		
	}


	/**
	 * Determine which page to redirect to
	 *
	 * @param  str  $uri, str $column, str $label
	 * @return Link with params for sorting function
	 */
	 
	function sort_table_by($uri, $column, $label)
	{
	
		$direction = (Request::get('direction') == 'DESC') ? 'ASC' : 'DESC';
/*
		$sortableLink = '<a href="' . $uri . '?sortBy=' . $column . '&direction=' . $direction . '">' . $label . '<i class="' . ($direction == 'ASC' ? 'glyphicon glyphicon-chevron-up' : 'glyphicon glyphicon-chevron-down') . '"></i></a>';
	
		return $sortableLink;
*/

		return link_to_route($uri, $label, ['sortBy' => $column, 'direction' => $direction]);
	
	}


	/**
	 * Fill in the details for the project summary
	 *
	 * @param  str  $description, str $type
	 * @return String with project count and summed total filled in
	 */
	 
	function build_projects_summary($description, $type = 'complete')
	{
		
		switch($type)
		{
			
			case 'complete':
				$count = Project::whereComplete()->count();
				$total = Project::whereComplete()->sum('value');
				break;

			case 'pipeline':
				$count = Project::wherePipeline()->count();
				$total = Project::wherePipeline()->sum('value');
				break;
				
			case 'current':
				$count = Project::whereCurrent()->count();
				$total = Project::whereCurrent()->sum('value');
				break;							
			
		}
		
		$total = number_format($total, 2, '.', ',');
		
		$description = str_replace('#', $count, $description);
		$description = str_replace('x.xx', $total, $description);
		
		return $description; 	
		
	}
	
	
	/**
	 * Create a bar graph from the given value ( 0 - 100 )
	 *
	 * @param  str  $percentage
	 * @return Div with width set to percentage
	 */
	
	function show_percentage_as_bar($percentage = 100)
	{
		
		return '<div class="bar"><div style="width: ' . $percentage . '%; background-color: rgb(150,150,150);">&nbsp;</div';
		
	}

?>