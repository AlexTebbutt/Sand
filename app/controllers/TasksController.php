<?php

class TasksController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Fetch all tasks
		$tasks = Task::with('user')->get();
		$users = User::lists('username','id');
		
		return View::make('tasks.index',compact('tasks','users'));
		
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

		$task = new Task(Input::all());

		if (!$task->save())
		{
			
			return Redirect::back()->withInput()->withErrors($task->getErrors());
			
		}

/*
		//Save the task to the DB
		try
		{

			$this->taskCreator->make(Input::all());
			
		} 
		
		catch(acme\validators\ValidationException $e)
		
		{
			
			return Redirect::back()->withInput()->withErrors($e->getErrors());
			
		}
*/
		

/*
		Task::create ([
			'title' => $input['title'],
			'note' => $input['note'],
			'user_id' => $input['user_id']
		]);
*/
		
		return Redirect::to('tasks');

		
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
//		$task = Task::findOrFail($id);
		$task = Task::find($id);		

/* 		return $task; */

		return View::make('tasks.show', compact('task'));
		
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
		
		$task = Task::find($id);
		
		$task->complete = Input::get('complete') ? Input::get('complete') : 0; 
		
		$task->save();
		
		return Redirect::to('tasks');
		
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