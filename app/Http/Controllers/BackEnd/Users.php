<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    public function store(Request $request)
    {
    	//dd(request('password'));
    	//dd($request->all());
    	User::create([
    		'email' => request('email'),
    		'password' => Hash::make(request('password'))
    	]);

    	return redirect()->route('users.index');
    }

    public function create()
    {
    	return view('back-end.users.create');
    }
}
