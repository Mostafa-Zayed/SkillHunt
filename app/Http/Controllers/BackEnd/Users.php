<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
//use Illuminate\Http\Request;
use App\Http\Requests\BackEnd\Users\Store;
use App\Http\Requests\BackEnd\Users\Update;
use Illuminate\Support\Facades\Hash;
class Users extends BackEndController
{
    
    public function __construct(User $model)
    {
        
        parent::__construct($model);

    }
	

    public function store(Store $request)
    {

        $data = $request->all();
        $data['password'] = Hash::make(request('password'));
        $this->model::create($data);
    	return redirect()->route(''.$this->lowerModelNamePlural.'.index');
    }

    public function update($id,Update $request)
    {
        $row = $this->model::findOrFail($id);
        $data = $request->all();
        if(isset($data['password']) && $data['password'] !== ''){
            $data['password'] = Hash::make($data['password']);
        }else{
            unset($data['password']);
        }
        unset($data['password_confirmation']);
        $row->update($data);
        return redirect()->route(''.$this->lowerModelNamePlural.'.edit',['id'=>$row->id]);
    }

    protected function filter($rows)
    {
        if(request()->has('email')){
            $rows = $rows->where('email',request()->get('email'));
        }

        return $rows;
    }

}
