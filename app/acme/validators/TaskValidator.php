<?php namespace acme\validators;

class TaskValidator extends Validator {

	// For additional validation rules see - http://laravel.com/docs/validation

	protected static $rules = [
		'title' => 'required',
		'user_id' => 'required'
	];

}