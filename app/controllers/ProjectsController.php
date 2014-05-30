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
		$sortBy = (!is_null(Request::get('sortBy')) ? Request::get('sortBy') : 'created_at');
		$direction = (!is_null(Request::get('direction')) ? Request::get('direction') : 'DESC');
/* 		$projects = Project::orderBy($sortBy, $direction)->with('client', 'contact', 'phase')->where('phase_id', '>', '1')->where('phase_id', '<', '8')->get();	 */
		
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->join('projectphases', 'projectphases.id', '=', 'projects.projectphase_id')
     ->where('projectphase_id', '>', '1')
     ->where('projectphase_id', '<', '8')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName','projectphases.name as projectPhaseName'))
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
		$projectphases = Projectphase::lists('name','id');
		$paymentphases = Paymentphase::lists('name','id');

		return View::make('projects.create', compact('clients', 'contacts', 'projectphases', 'paymentphases'));
		
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
		$projectphases = Projectphase::lists('name','id');
		$paymentphases = Paymentphase::lists('name','id');
		/* $projectnotes = Projectnote::where('project_id', $id)->orderBy('updated_at', 'DESC')->get() */;
		
		$projectnotes = Projectnote::join('users', 'users.id', '=', 'projectnotes.user_id')
			->where('project_id', $id)
			->select(array('projectnotes.*', 'users.username as userName'))
			->orderBy('updated_at', 'DESC')->get();

		return View::make('projects.edit', compact('project','clients', 'contacts', 'projectphases', 'paymentphases', 'projectnotes'));
		
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
		
		Project::destroy($id);
		
		return Redirect::to(check_redirect('projects'));
		
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
		$sortBy = (!is_null(Request::get('sortBy')) ? Request::get('sortBy') : 'created_at');
		$direction = (!is_null(Request::get('direction')) ? Request::get('direction') : 'DESC');
		//$projects = Project::orderBy($sortBy, $direction)->with('client', 'contact', 'phase')->where('phase_id', '=', '8')->get();
		
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->join('projectphases', 'projectphases.id', '=', 'projects.projectphase_id')
     ->where('projectphase_id', '=', '8')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName','projectphases.name as projectPhaseName'))
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
		$sortBy = (!is_null(Request::get('sortBy')) ? Request::get('sortBy') : 'created_at');
		$direction = (!is_null(Request::get('direction')) ? Request::get('direction') : 'DESC');
		//$projects = Project::orderBy($sortBy, $direction)->with('client', 'contact', 'phase')->where('phase_id', '=', '1')->get();
		
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->join('projectphases', 'projectphases.id', '=', 'projects.projectphase_id')
     ->where('projectphase_id', '=', '1')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName','projectphases.name as projectPhaseName'))
     ->orderBy($sortBy, $direction)->get(); 
		
		Session::put('redirect', URL::full());
		
		return View::make('projects.pipeline', compact('projects', 'details'));
		
	}

	public function showOnHold()
	{

		$sortBy = (!is_null(Request::get('sortBy')) ? Request::get('sortBy') : 'created_at');
		$direction = (!is_null(Request::get('direction')) ? Request::get('direction') : 'DESC');
		//$projects = Project::orderBy($sortBy, $direction)->with('client', 'contact', 'phase')->where('phase_id', '=', '1')->get();
		
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->join('projectphases', 'projectphases.id', '=', 'projects.projectphase_id')
     ->where('projectphase_id', '=', '9')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName','projectphases.name as projectPhaseName'))
     ->orderBy($sortBy, $direction)->get(); 
		
		Session::put('redirect', URL::full());
		
		return View::make('projects.onhold', compact('projects'));
		
	}

	public function showRejected()
	{

		$sortBy = (!is_null(Request::get('sortBy')) ? Request::get('sortBy') : 'created_at');
		$direction = (!is_null(Request::get('direction')) ? Request::get('direction') : 'DESC');
		//$projects = Project::orderBy($sortBy, $direction)->with('client', 'contact', 'phase')->where('phase_id', '=', '1')->get();
		
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->where('projectphase_id', '=', '10')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName'))
     ->orderBy($sortBy, $direction)->get(); 
		
		Session::put('redirect', URL::full());
		
		return View::make('projects.rejected', compact('projects'));
		
	}
	
	
	public function deleteProject($id)
	{
		
		$project = Project::findOrFail($id);
		
		return View::make('projects.delete', compact('project'));	
			
	}


	public function duplicateProject($id)
	{
		
		$project = Project::findOrFail($id);
		$newProject = $project->replicate();
		$newProject->save();
		
 		return Redirect::to('projects/' . $newProject->id . '/edit');
			
	}		
	
	

}