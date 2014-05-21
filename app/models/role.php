<?php

class Role extends BaseModel {

	protected $guarded = ['id', 'created_at', 'updated_at'];
	
	protected static $rules =[
		'name' => 'required'
	];

	public function user()
	{
		
		return $this->hasMany('User');
		
	}

}
?>