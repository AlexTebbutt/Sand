<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$details = new stdClass();
		$details->summary = build_projects_summary('We currently have # projects in progress, valued at £x.xx', 'current');
		$sortBy = (!is_null(Request::get('sortBy')) ? Request::get('sortBy') : 'name');
		$direction = (!is_null(Request::get('direction')) ? Request::get('direction') : 'ASC');
/* 		$projects = Project::orderBy($sortBy, $direction)->with('client', 'contact', 'phase')->where('phase_id', '>', '1')->where('phase_id', '<', '8')->get();	 */
		
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->join('phases', 'phases.id', '=', 'projects.phase_id')
     ->where('phase_id', '>', '1')
     ->where('phase_id', '<', '8')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName','phases.name as phaseName'))
     ->orderBy($sortBy, $direction)->get(); 

		Session::put('redirect', URL::full());

		return View::make('projects.index', compact('projects', 'details'));
		
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
		
		return Redirect::to(check_redirect('projects'));		
		
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

		$details = new stdClass();
		$details->summary = build_projects_summary('We have completed # projects, total value: £x.xx', 'complete');
		$sortBy = (!is_null(Request::get('sortBy')) ? Request::get('sortBy') : 'name');
		$direction = (!is_null(Request::get('direction')) ? Request::get('direction') : 'ASC');
		//$projects = Project::orderBy($sortBy, $direction)->with('client', 'contact', 'phase')->where('phase_id', '=', '8')->get();
		
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->join('phases', 'phases.id', '=', 'projects.phase_id')
     ->where('phase_id', '=', '8')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName','phases.name as phaseName'))
     ->orderBy($sortBy, $direction)->get(); 

		Session::put('redirect', URL::full());
		
		return View::make('projects.complete', compact('projects', 'details'));
		
	}
	
	/**
	 * Show the pipeline projects using a tailored view.
	 *
	 * @param  int  $id
	 * @return Response
	 */	
	public function showPipeline()
	{

		$details = new stdClass();
		$details->summary = build_projects_summary('We have # potential projects, prospective total value: £x.xx', 'pipeline');	
		$sortBy = (!is_null(Request::get('sortBy')) ? Request::get('sortBy') : 'name');
		$direction = (!is_null(Request::get('direction')) ? Request::get('direction') : 'ASC');		
		//$projects = Project::orderBy($sortBy, $direction)->with('client', 'contact', 'phase')->where('phase_id', '=', '1')->get();
		
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->join('phases', 'phases.id', '=', 'projects.phase_id')
     ->where('phase_id', '=', '1')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName','phases.name as phaseName'))
     ->orderBy($sortBy, $direction)->get(); 
		
		Session::put('redirect', URL::full());
		
		return View::make('projects.pipeline', compact('projects', 'details'));
		
	}
		
	
	

}