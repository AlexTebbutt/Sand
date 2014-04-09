<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::with('client', 'contact', 'phase')->where('phase_id', '>', '1')->where('phase_id', '<', '8')->get();

		return View::make('projects.index', compact('projects'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	
		$clients = Client::orderBy('name')->lists('name','id');
		$contacts = Contact::orderBy('name')->lists('name','id');
		$phases = Phase::lists('name','id');

		return View::make('projects.create', compact('clients', 'contacts', 'phases'));
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		//$project = new Project(Input::all());
		$project = New Project();
		$input = array_filter(Input::all(), 'strlen');
		$project->fill($input);
		
		if(!$project->save())
		{
		
			return Redirect::back()->withInput()->withErrors($project->getErrors());
				
		}
		
		return Redirect::to('projects');
		
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
		
		$project = Project::findOrFail($id);
		$clients = Client::orderBy('name')->lists('name','id');
		$contacts = Contact::orderBy('name')->lists('name','id');
		$phases = Phase::lists('name','id');
				
		return View::make('projects.edit', compact('project','clients', 'contacts', 'phases'));
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$project = Project::findOrFail($id);
		$input = array_filter(Input::all(), 'strlen');
		$project->fill($input);
		$project->save();
		
		return Redirect::to('projects');		
		
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
	
	
	/* Non RESTful functions found here!! */

	/**
	 * Show the completed projects using a tailored view.
	 *
	 * @param  int  $id
	 * @return Response
	 */	
	public function showComplete()
	{
		
		$projects = Project::with('client', 'contact', 'phase')->where('phase_id', '=', '8')->get();
		
		return View::make('projects.complete', compact('projects'));
		
	}
	
	/**
	 * Show the pipeline projects using a tailored view.
	 *
	 * @param  int  $id
	 * @return Response
	 */	
	public function showPipeline()
	{
		
		$projects = Project::with('client', 'contact', 'phase')->where('phase_id', '=', '1')->get();
		
		return View::make('projects.pipeline', compact('projects'));
		
	}
		
	
	

}