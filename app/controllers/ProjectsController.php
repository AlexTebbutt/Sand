<?php

class ProjectsController extends \BaseController {


	public function dropdown()
	{
		
		$clients = Client::orderBy('name')->lists('name','id');

		return View::make('projects.dynamicDropDown', compact('clients'));
				
	}



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

		$projects = DB::table('projects as a')
		->select(array('a.*', 'b.reference as reference', 'b.link as link', 'c.name as clientName', 'd.name as contactName', 'e.name as projectPhaseName'))		
		->leftJoin(DB::raw('(SELECT project_id, reference, link FROM costings ORDER BY created_at DESC) AS b'), 'b.project_id', '=', 'a.id')
		->join(DB::raw('(SELECT name, id FROM clients) AS c'), 'c.id', '=', 'a.client_id')
    ->join(DB::raw('(SELECT name, id FROM contacts) AS d'), 'd.id', '=', 'a.contact_id')
    ->join(DB::raw('(SELECT name, id FROM projectphases) AS e'), 'e.id', '=', 'a.projectphase_id')
		->where('a.projectphase_id', '>', '1')
		->where('a.projectphase_id', '<', '8')		
    ->orderBy($sortBy, $direction)
		->groupBy('a.id')
		->get();		
/*
		
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->join('projectphases', 'projectphases.id', '=', 'projects.projectphase_id')
     ->where('projectphase_id', '>', '1')
     ->where('projectphase_id', '<', '8')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName','projectphases.name as projectPhaseName'))
     ->orderBy($sortBy, $direction)->get(); 
*/

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
		$projectnotes = NULL;

		return View::make('projects.create', compact('clients', 'contacts', 'projectphases', 'paymentphases','projectnotes'));
		
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
		
		return Redirect::to('/projects/' . $project->id . '/edit');
		
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
		$contacts = Contact::where('client_id', $project->client_id)->orderBy('name')->lists('name','id');
		$projectphases = Projectphase::lists('name','id');
		$paymentphases = Paymentphase::lists('name','id');
		$costings = Costing::where('project_id', $id)->orderBy('created_at' ,'DESC')->get();

		/* $projectnotes = Projectnote::where('project_id', $id)->orderBy('updated_at', 'DESC')->get() */;
		
		$projectnotes = Projectnote::join('users', 'users.id', '=', 'projectnotes.user_id')
			->where('project_id', $id)
			->select(array('projectnotes.*', 'users.username as userName'))
			->orderBy('updated_at', 'DESC')->get();

		return View::make('projects.edit', compact('project','clients', 'contacts', 'projectphases', 'paymentphases', 'projectnotes', 'costings'));
		
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
		$input = array_filter(Input::except('project_id', 'user_id', 'note'), 'strlen');
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

		$projects = DB::table('projects as a')
		->select(array('a.*', 'b.reference as reference', 'b.link as link', 'b.paymentphase_id as paymentphase_id', 'c.name as clientName', 'd.name as contactName'))		
		->leftJoin(DB::raw('(SELECT project_id, reference, link, paymentphase_id FROM costings ORDER BY created_at DESC) AS b'), 'b.project_id', '=', 'a.id')
		->join(DB::raw('(SELECT name, id FROM clients) AS c'), 'c.id', '=', 'a.client_id')
    ->join(DB::raw('(SELECT name, id FROM contacts) AS d'), 'd.id', '=', 'a.contact_id')
    ->where('projectphase_id', '=', '8')	
    ->orderBy($sortBy, $direction)
		->groupBy('a.id')
		->get();

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
		

		$projects = DB::table('projects as a')
		->select(array('a.*', 'b.reference as reference', 'b.link as link', 'c.name as clientName', 'd.name as contactName'))		
		->leftJoin(DB::raw('(SELECT project_id, reference, link FROM costings ORDER BY created_at DESC) AS b'), 'b.project_id', '=', 'a.id')
		->join(DB::raw('(SELECT name, id FROM clients) AS c'), 'c.id', '=', 'a.client_id')
    ->join(DB::raw('(SELECT name, id FROM contacts) AS d'), 'd.id', '=', 'a.contact_id')
    ->where('projectphase_id', '=', '1')	
    ->orderBy($sortBy, $direction)
		->groupBy('a.id')
		->get();

/*
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->join('projectphases', 'projectphases.id', '=', 'projects.projectphase_id')
     ->where('projectphase_id', '=', '1')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName','projectphases.name as projectPhaseName'))
     ->orderBy($sortBy, $direction)->get(); 
*/
		
		Session::put('redirect', URL::full());
		
		return View::make('projects.pipeline', compact('projects', 'details'));
		
	}

	public function showOnHold()
	{

		$sortBy = (!is_null(Request::get('sortBy')) ? Request::get('sortBy') : 'created_at');
		$direction = (!is_null(Request::get('direction')) ? Request::get('direction') : 'DESC');
		//$projects = Project::orderBy($sortBy, $direction)->with('client', 'contact', 'phase')->where('phase_id', '=', '1')->get();
		

		$projects = DB::table('projects as a')
		->select(array('a.*', 'b.reference as reference', 'b.link as link', 'c.name as clientName', 'd.name as contactName'))		
		->leftJoin(DB::raw('(SELECT project_id, reference, link FROM costings ORDER BY created_at DESC) AS b'), 'b.project_id', '=', 'a.id')
		->join(DB::raw('(SELECT name, id FROM clients) AS c'), 'c.id', '=', 'a.client_id')
    ->join(DB::raw('(SELECT name, id FROM contacts) AS d'), 'd.id', '=', 'a.contact_id')
    ->where('projectphase_id', '=', '9')	
    ->orderBy($sortBy, $direction)
		->groupBy('a.id')
		->get();
		
/*
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->join('projectphases', 'projectphases.id', '=', 'projects.projectphase_id')
     ->where('projectphase_id', '=', '9')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName','projectphases.name as projectPhaseName'))
     ->orderBy($sortBy, $direction)->get(); 
*/
		
		Session::put('redirect', URL::full());
		
		return View::make('projects.onhold', compact('projects'));
		
	}

	public function showRejected()
	{

		$sortBy = (!is_null(Request::get('sortBy')) ? Request::get('sortBy') : 'created_at');
		$direction = (!is_null(Request::get('direction')) ? Request::get('direction') : 'DESC');
		//$projects = Project::orderBy($sortBy, $direction)->with('client', 'contact', 'phase')->where('phase_id', '=', '1')->get();

/*
		$projects = Project::join('clients', 'clients.id', '=', 'projects.client_id')
     ->join('contacts', 'contacts.id', '=', 'projects.contact_id')
     ->join('projectnotes', 'projectnotes.project_id', '=', 'projects.id')
     ->where('projectphase_id', '=', '10')
     ->select(array('projects.*','clients.name as clientName','contacts.name as contactName', 'projectnotes.note as note'))
     ->orderBy($sortBy, $direction)->get(); 
*/

		$projects = DB::table('projects as a')
		->select(array('a.*', 'b.note', 'c.name as clientName', 'd.name as contactName'))
		->leftJoin(DB::raw('(SELECT note, project_id FROM projectnotes ORDER BY created_at DESC) AS b'), 'b.project_id', '=', 'a.id')
		->join(DB::raw('(SELECT name, id FROM clients) AS c'), 'c.id', '=', 'a.client_id')
    ->join(DB::raw('(SELECT name, id FROM contacts) AS d'), 'd.id', '=', 'a.contact_id')
		->where('a.projectphase_id', '=', '10')
    ->orderBy($sortBy, $direction) 
		->groupBy('a.id')
		->get();	
		
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
	
	public function test()
	{
		
/*
BELOW QUERY IS for rejected projects
select a.name, b.note, c.name, d.name from projects a 
left join (select note, project_id from projectnotes order by created_at desc) as b on (b.project_id = a.id) 
inner join (select id, name from contacts) as c on c.id = a.contact_id
inner join (select id, name from clients) as d on d.id = a.client_id
where projectphase_id = 10 group by a.id;

Code implementation of the above
		$projects = DB::table('projects as a')
		->select(array('a.*', 'b.note', 'c.name as clientName', 'd.name as contactName'))
		->leftJoin(DB::raw('(SELECT note, project_id FROM projectnotes ORDER BY created_at DESC) AS b'), 'b.project_id', '=', 'a.id')
		->join(DB::raw('(SELECT name, id FROM clients) AS c'), 'c.id', '=', 'a.client_id')
    ->join(DB::raw('(SELECT name, id FROM contacts) AS d'), 'd.id', '=', 'a.contact_id')
		->where('a.projectphase_id', '=', '10')
		->orderBy('a.created_at', 'DESC')
		->groupBy('a.id')
		->get();
*/

		$projects = DB::table('projects as a')
		->select(array('a.*', 'b.reference as reference', 'b.link as link', 'c.name as clientName', 'd.name as contactName', 'e.name as phaseName'))		
		->leftJoin(DB::raw('(SELECT project_id, reference, link FROM costings ORDER BY created_at DESC) AS b'), 'b.project_id', '=', 'a.id')
		->join(DB::raw('(SELECT name, id FROM clients) AS c'), 'c.id', '=', 'a.client_id')
    ->join(DB::raw('(SELECT name, id FROM contacts) AS d'), 'd.id', '=', 'a.contact_id')
    ->join(DB::raw('(SELECT name, id FROM projectphases) AS e'), 'e.id', '=', 'a.projectphase_id')
		->where('a.projectphase_id', '>', '1')
		->where('a.projectphase_id', '<', '8')		
		->orderBy('a.created_at', 'DESC')
		->groupBy('a.id')
		->get();		

		$count = 0;
	
		 foreach($projects as $project)
		 {
			 $count++;
			 echo 'Project: ' . $project->name . ' Note: ' . $project->note . ' Client: ' . $project->clientName . ' Contact : ' . $project->contactName . '<br /><br />';

/* 			 echo 'Project: ' . $project->name . ' Note: <br />'; */
			 
			 
		 }
		
		 echo 'Count: ' . $count;
	}
	
	public function sql()
	{
		
		$projects = Project::all();
		
		return View::make('projects.sql', compact('projects'));
		
	}
	
	

}