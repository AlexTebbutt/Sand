<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$users = User::with('role')->get();
		Session::put('redirect', URL::full());
		
		return View::make('users.index', compact('users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$role = Role::lists('name','id');

		return View::make('users.create', compact('role'));
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$user = New User();
		$input = array_filter(Input::all(), 'strlen');
		$user->fill($input);
		
		if(!$user->save())
		{
		
			return Redirect::back()->withInput()->withErrors($user->getErrors());
				
		}
		
		return Redirect::to('users');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$user = User::findOrFail($id);
		$role = Role::lists('name','id');

		return View::make('users.edit', compact('user','role'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$user = User::findOrFail($id);
 		$input = array_filter(Input::all(), 'strlen'); 
		$user->fill($input);
		
		//$user->fill(Input::all());

		
//		return $user;

		$user->save();
		
		return Redirect::to(check_redirect('users'));	

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		User::destroy($id);
		
		return Redirect::to(check_redirect('users'));
		
	}
	
	
	public function deleteUser($id)
	{
		
		$user = User::findOrFail($id);
		
		return View::make('users.delete', compact('user'));	
			
	}	


}
