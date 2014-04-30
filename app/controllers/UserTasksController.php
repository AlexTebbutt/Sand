<?php

class UserTasksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($username)
	{
		
		$tasks = User::byUsername($username)->tasks;
		$users = User::lists('username', 'id');
				
		return View::make('tasks.usertasks', compact('tasks', 'users'));



/*
		$tasks = Task::byUsername($username);
		
		return View::make('tasks.usertasks', compact('tasks'));
*/
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username, $taskID)
	{
		
		//Show specific task related to user
		$task = User::byUsername($username)->tasks()->findOrFail($taskID);
		$users = User::lists('username', 'id');
		
		return View::make('tasks.show', compact('task', 'users'));
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($username, $taskID)
	{

		//Show specific task related to user
		$task = User::byUsername($username)->tasks()->findOrFail($taskID);
		$users = User::lists('username', 'id');
		
		return View::make('tasks.edit', compact('task', 'users'));	
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}