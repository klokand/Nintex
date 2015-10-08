<?php namespace App\Http\Controllers;
use Request;
use Input;
use App\User;
use App\Book;
use App\Borrow;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	
	public function borrow1(){
	 $data=[];
		if(Request::ajax()){
			$name = Input::get("name");
			$email = Input::get("email");
			$data = compact('name','email');
		}
		return $data;
	}
	public function borrow2(){
		//$user = user::where('email', '=', Input::get('bemail'))->firstOrFail();
		$returnData ="";
		$name = Input::get("name");
		$email = Input::get("email");
		if(Request::ajax()){
			$userCount = User::where('email', '=', Input::get('email'))->count();
			$bookCount = Book::where('barcode', '=', Input::get('barcode'))->count();
			
			if($userCount==1){
				$returnData =$returnData ." user existed ";
				$user = User::where('email', '=', Input::get('email'))->find(1);
			}
			
			if($userCount==0){
				$name = Input::get("name");
				$email = Input::get("email");
				$user = user::create(array(
					'email' => $email,
					'name' => $name,
				));
				$returnData =$returnData ." user is created ";
			}
			if($bookCount==1){
				$returnData =$returnData ." book existed ";
				$book = Book::where('barcode', '=', Input::get('barcode'))->find(1);
			}
			
			if($bookCount==0){
				$title = Input::get('title');
				$author = Input::get('author');
				$barcode = Input::get('barcode');
			
			$book = book::create(array(
					'title' => $title,
					'author' => $author,
					'barcode' => $barcode,
				));
				$returnData =$returnData ." book is created ";
			}
			
			$borrow = Borrow::create(array(
					'user_id' => $user->id,
					'book_id' => $book->id,
				));
			$returnData = $returnData." borrowing is successful user id =".$user->id." book id =".$book->id;
		}
		return $returnData;
	}

}
