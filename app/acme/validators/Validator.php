<?php namespace acme\validators;

use Validator as V;

abstract class Validator {

	protected $errors;

	public function isValid(array $attributes)
	{
		
		$v = Validator::make($attributes, static::$rules);
	
		if($v->fails())
		{
			
			$this->errors = $v->messages();
			
			return FALSE;
			
		}
		
		return TRUE;
		
	}

	public function getErrors()
	{
		
		return $this->errors;
		
	}

}