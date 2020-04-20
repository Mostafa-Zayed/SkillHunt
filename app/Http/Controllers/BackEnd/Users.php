<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class Users extends BackEndController
{
    
    public function __construct(User $model)
    {
        
        parent::__construct($model);

    }
	

    public function store(Request $request)
    {
    	User::create([
    		'email' => request('email'),
    		'password' => Hash::make(request('password'))
    	]);

    	return redirect()->route('users.index');
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


}
