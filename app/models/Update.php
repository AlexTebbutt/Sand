<?php

class Update extends BaseModel {

	protected $guarded = ['id', 'created_at', 'updated_at'];

	protected static $rules =[
		'message' => 'required',
	];


}
?>