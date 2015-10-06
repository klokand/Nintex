<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class borrow extends Model {

	protected $fillable = array('id','user_id','book_id','returned');
	
	public function user(){
		return $this->belongsTo('App\user');
	}
	public function book(){
		return $this->belongsTo('App\book');
	}

}
