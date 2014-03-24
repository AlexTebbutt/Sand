<?php

use acme\validators\TaskValidator;

class Task extends BaseModel {
	

	protected $guarded = ['id'];
	
	protected static $rules =[
		'title' => 'required',
		'user_id' => 'required'
	];

	public function user()
	{
		
		return $this->belongsTo('User');
		
		
	}
	
	
	public static function find($id, $username = NULL)
	{
		
		$task = static::with('user')->find($id);
		
		if ($task)
		{
	
			if ($username and $task->user->username !== $username)
				throw new Illuminate\Database\Eloquent\ModelNotFoundException;
	
			
			return($task);
		} else {
			
			throw new Illuminate\Database\Eloquent\ModelNotFoundException;
			
		}
		
	}
	
	public static function byUsername($username)
	{
		
		return User::byUsername($username)->tasks;
		
	}
	
}


?>