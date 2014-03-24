<?php

class BaseModel extends Eloquent 
{

	protected $errors;
	
	public static function boot()
	{
		
		parent::boot();
		
		static::saving(function($model)
		{
			
			return $model->validate();
			
		});
		
	}
	
	public function validate()
	{
		
		$validation = Validator::make($this->getAttributes(), static::$rules);
		
		if($validation->fails())
		{
			
			$this->errors = $validation->messages();
			
			return FALSE;
			
		}
		
		return TRUE;
		
	}
	
	public function getErrors() 
	{
		
		return $this->errors;
		
	}

}