<?php

class Projectnote extends Basemodel {

	protected $guarded = ['id'];


	protected static $rules =[
		'user_id' => 'required',
		'project_id' => 'required',
		'note' => 'required',
	];
		
	public function project()
	{
		
		return $this->hasMany('Project');
		
	}

}