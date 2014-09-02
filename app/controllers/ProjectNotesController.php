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

	public function teststore()
	{

			//$project = new Project(Input::all());
			$projectNote = New Projectnote();
			$projectNote->user_id = '1';
			$projectNote->project_id = '1';
			$projectNote->note = 'testetsetasdfasdf';
		
			if(!$projectNote->save())
			{

				return $projectNote->getErrors();
					
			} 

			$username = User::find($projectNote->user_id)->username;
			
			$username = User::find($projectNote->user_id)->username;
			$date = (Carbon::createFromFormat('Y-m-d H:i:s', $projectNote->created_at)->format('d/m/Y \a\t H:i'));
			
			$responseValues = array(
				'note' => $projectNote->note,
				'added_on' => $date,
				'username' => $username
			);
			
			
			return Response::json($responseValues);
		
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

			//$project = new Project(Input::all());
			$projectNote = New Projectnote();
			$input = array_filter(Input::all(), 'strlen');
	    $projectNote->fill($input);
		
			if(!$projectNote->save())
			{

				$responseValues = array(
					'validation_failed' => 1,
					'errors' => 'Please supply note copy'
				);
				
				return Response::json($responseValues);
					
			} 
			
			Event::fire('projectnote.created', $projectNote);
			
			$username = User::find($projectNote->user_id)->username;
			$date = (Carbon::createFromFormat('Y-m-d H:i:s', $projectNote->created_at)->format('d/m/Y \a\t H:i'));
			
			$responseValues = array(
				'note' => $projectNote->note,
				'added_on' => $date,
				'username' => $username
			);
			
			return Response::json($responseValues);
		
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
