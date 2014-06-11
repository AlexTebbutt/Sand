<?php

class Costing extends Basemodel {

	protected $guarded = ['id'];


	protected static $rules =[
		'project_id' => 'required',
	];
		
	public function project()
	{
		
		return $this->hasMany('Project');
		
	}

}