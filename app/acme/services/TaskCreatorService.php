<?php namespace acme\services;

use acme\validators\TaskValidator;

class TaskCreatorService {

	protected $validator;
	
	public function __construct(TaskValidator $validator)
	{
		
		$this->validator = $validator;
		
	}
	


	public function make(array $attributes)
	{
	
		// Determine if the data is valid
		if ($this->validator->isValid($attributes))
		{
			
			// Create a new task
			
			Task::create ([
				'title' => $input['title'],
				'note' => $input['note'],
				'user_id' => $input['user_id']
			]);
			
			return TRUE;
			
		}
				
		// If not, throw excpetion
		throw new acme\validators\ValidationException('Task validation failed', $this->validator->getErrors());
		
	}

}