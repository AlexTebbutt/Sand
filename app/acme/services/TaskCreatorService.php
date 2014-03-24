<?php namespace acme\services;

use acme\validators\TaskValidator;

use acme\validators\ValidationException;

use Task;

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
				'title' => $attributes['title'],
				'note' => $attributes['note'],
				'user_id' => $attributes['user_id']
			]);
			
			return TRUE;
			
		}
				
		// If not, throw excpetion
		throw new ValidationException('Task validation failed', $this->validator->getErrors());
		
	}

}