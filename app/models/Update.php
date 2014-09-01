<?php

class Update extends BaseModel {

	protected $guarded = ['id', 'created_at', 'updated_at'];

	protected static $rules =[
		'message' => 'required',
	];


/* Date Accessors to get format correctly for display */


	public function getCreatedAtAttribute($value) 
  {

  	return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d/m/Y \a\t H:i');

  }



}
?>