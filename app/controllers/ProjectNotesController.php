<?php

class ProjectNotesController extends \BaseController {


	/**
	 * Creates a project note.
	 *
	 * @return Response
	 */






	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		

		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

    if (Request::ajax())
    {

/*
			//$project = new Project(Input::all());
			$projectNote = New Projectnote();
			$input = array_filter(Input::all(), 'strlen');
	    $projectNote->fill($input);
		
			if(!$projectNote->save())
			{
			
				return 'Laravel error';
					
			} 
*/ 

			return 'Ajax POST request processed.';
			  
		
		}

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
