<?php


/*
|--------------------------------------------------------------------------
| Debugging SQL
|--------------------------------------------------------------------------
|
|
*/

/*
Event::listen('illuminate.query', function($query)
{
	
	var_dump($query);
	
});

Route::get('/test', 'ProjectsController@test');


Route::get('/sql', 'ProjectsController@sql');
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Home
Route::get('/', ['as' => 'home', 'uses' => function()
{

	return Redirect::to('projects/current');

}]);

/*
|--------------------------------------------------------------------------
| Session Routes
|--------------------------------------------------------------------------
|
| User authenticatio, login / logout etc.
|
*/

Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);

Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions','SessionsController', ['only' => ['create','destroy','store']]);


/*
Route::get('/', function()
{

	return Redirect::to('/projects');

});
*/



Route::group(['before' => 'auth'], function()
{


	/*
	|--------------------------------------------------------------------------
	| Projects
	|--------------------------------------------------------------------------
	|
	| agencies: Projects resource.
	|
	*/
	
	Route::get('/projects/complete', array('as' => 'projects/completed', 'uses' => 'ProjectsController@showComplete'));
	
	Route::get('/projects/pipeline', array('as' => 'projects/pipeline', 'uses' => 'ProjectsController@showPipeline'));

	Route::get('/projects/onhold', array('as' => 'projects/onhold', 'uses' => 'ProjectsController@showOnHold'));

	Route::get('/projects/rejected', array('as' => 'projects/rejected', 'uses' => 'ProjectsController@showRejected'));
	
	Route::get('/projects/delete/{id}','ProjectsController@deleteProject');
	
	Route::get('/projects/duplicate/{id}', 'ProjectsController@duplicateProject');
	
	Route::get('projects/current', array('as' => 'projects', 'uses' => 'ProjectsController@index'))->before('auth');
	
	Route::resource('projects','ProjectsController');
	
	/* Route::get('projects', ['as' => 'projects', 'uses' => 'ProjectsController@index']); */
	
	
	/*
	|--------------------------------------------------------------------------
	| Clients
	|--------------------------------------------------------------------------
	|
	| agencies: agency resource.
	|
	*/
	
	Route::get('clients', array('as' => 'clients', 'uses' => 'ClientsController@index'));

	Route::resource('clients','ClientsController');
	
	
	/*
	|--------------------------------------------------------------------------
	| Contacts
	|--------------------------------------------------------------------------
	|
	| contacts: contacts resource.
	|
	*/
	
	/* Route::post('/contacts', 'ContactsController@store'); */
	
	Route::get('contacts', array('as' => 'contacts', 'uses' => 'ContactsController@index'));
	
	Route::get('/contacts/client/{id}/list', function($id)
	{
		
		$contacts = Contact::where('client_id', $id)->lists('name', 'id');

		return Response::json($contacts);
		
	});
	
	
	Route::resource('contacts','ContactsController');
	
	
	
	/*
	|--------------------------------------------------------------------------
	| Tasks
	|--------------------------------------------------------------------------
	|
	| tasks: show all tasks
	| tasks/id: show specific task
	| username/tasks: show all tasks for specific user
	| username/tasks/id: show specific task for specific user
	|
	*/
	
	
/* 	Route::resource('tasks', 'TasksController'); */
	
	Route::get('/tasks', ['as' => 'tasks', 'uses' => 'TasksController@index']);
	
	Route::post('/tasks', 'TasksController@store');
	
	Route::get('/tasks/delete/{id}','TasksController@deleteTask');

	
/*
	Route::patch('/tasks/{id}', ['as' => 'tasks.update', 'use' => 'TasksController@update']);
	
	Route::get('/tasks/{id}', 'TasksController@show')->where('id', '\d+');
*/
	
	Route::get('/{username}/tasks', 'UserTasksController@index');
	
	Route::get('/{username}/tasks/{id}', ['as' => 'user.tasks.edit', 'uses' => 'UserTasksController@edit']);
	
	Route::resource('tasks','TasksController');
	
		
	
	
	
	
	/*
	Route::get('{username}/tasks', function($username)
	{
	
		$user = User::with('tasks')->whereUsername($username)->first();
		$tasks = $user->tasks;
	
	
		return View::make('tasks.index', compact('user', 'tasks'));
	
	});
	
	Route::get('{username}/tasks/{taskID}', function($username, $taskID)
	{
	
		$user = User::whereUsername($username)->first();
		$task = $user->tasks()->findOrFail($taskID);
	
		return View::make('tasks.show', compact('task'));
	
	});
	*/
	
	/*
	|--------------------------------------------------------------------------
	| Users
	|--------------------------------------------------------------------------
	|
	| users: show all users
	|
	*/
	
	Route::get('/users', ['as' => 'users', 'uses' => 'UserController@index']);
	
	Route::get('/users/delete/{id}','UsersController@deleteUser');
	
	Route::resource('users', 'UsersController');
	
	
		/*
	|--------------------------------------------------------------------------
	| Project Notes
	|--------------------------------------------------------------------------
	|
	|
	*/

	Route::post('/api/note/project/create', 'ProjectNotesController@store');
	
	/*
	|--------------------------------------------------------------------------
	| Costings: Estimate and invoice information
	|--------------------------------------------------------------------------
	|
	|
	*/
	
	Route::get('/costings/delete/{id}', array('as' => 'costings.delete', 'uses' => 'CostingsController@destroy'));

	Route::resource('costings', 'CostingsController');
	
	/*
	|--------------------------------------------------------------------------
	| Dashboard: Project snapshot information
	|--------------------------------------------------------------------------
	|
	|
	*/	
	
	
	Route::get('/dashboard/overview', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
	
	Route::resource('dashboard', 'DashboardController');

});

