<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;

class Users extends BackEndController
{
    
	/**
	* determane The users Index Page
	* 
	* @return View
	*/
    public function index()
    {
    	$rows = User::paginate(2);
    	return view('back-end.users.index',compact('rows'));
    }

    public function store()
    {

    }

    public function create()
    {
    	return view('back-end.users.create');
    }
}
