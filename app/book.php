<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	protected $fillable = array('id','title','author','barcode','validationNumber','status');
	
	public function borrow(){
		return $this->hasMany('App\borrow');
	}

}
