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

    public function edit($id)
    {
        $row = User::findOrFail($id);
        return view('back-end.users.edit',compact('row'));
    }

    public function update($id,Request $request)
    {
        $row = User::findOrFail($id);
        $data = $request->all();
        
        if(request()->has('password') && request()->get('password') !== ''){
            $data['password'] = Hash::make(request('password'));
        }

        $row->update($data);
        return redirect()->route('users.edit',['id'=>$row->id]);
    }

    public function destroy($id)
    {
         User::findOrFail($id)->delete();
         return redirect()->route('users.index');
    }
}
