<?php

class StudentController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function register()
	{
		$id=Input::get('stu_id');
		$name=Input::get('stu_name');
        $nick=Input::get('stu_nick');
        $email=Input::get('stu_email');
        $student=new Student;
        $student->name=$name;
        $student->nick=$nick;
        $student->email=$email;
        $student->account=$id;
        if(Student::where())
		$student->auth=str_random(20);
		return View::make('hello');
	}

}