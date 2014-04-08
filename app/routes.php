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

Route::get('/', function()
{

	return Redirect::to('/clients');

});


/*
|--------------------------------------------------------------------------
| Projects
|--------------------------------------------------------------------------
|
| agencies: agency resource.
|
*/

Route::resource('projects','ProjectsController');

Route::get('projects', ['as' => 'projects', 'uses' => 'ProjectsController@index']);


/*
|--------------------------------------------------------------------------
| Clients
|--------------------------------------------------------------------------
|
| agencies: agency resource.
|
*/

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


Route::resource('tasks', 'TasksController');
/*
Route::get('/tasks', ['as' => 'tasks', 'uses' => 'TasksController@index']);

Route::post('/tasks', 'TasksController@store');

Route::patch('/tasks/{id}', ['as' => 'tasks.update', 'use' => 'TasksController@update']);

Route::get('/tasks/{id}', 'TasksController@show')->where('id', '\d+');
*/

Route::get('/{username}/tasks', 'UserTasksController@index');

Route::get('/{username}/tasks/{id}', ['as' => 'user.tasks.show', 'uses' => 'UserTasksController@show']);






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

Route::get('users', function()
{

	Return 'Show all users';

});

