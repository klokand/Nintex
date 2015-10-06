<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model {

	protected $fillable = array('id','name','email','validationNumber','status');
	
	public function borrow(){
		return $this->hasMany('App\borrow');
	}
}
