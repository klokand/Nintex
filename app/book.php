<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model {

	protected $fillable = array('id','title','author','isbn','validationNumber','status');
	
	public function borrow(){
		return $this->hasMany('App\borrow');
	}
	

}
