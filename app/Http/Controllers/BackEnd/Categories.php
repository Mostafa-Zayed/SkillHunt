<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Category;
use App\Http\Requests\BackEnd\Categories\Store;
use App\Http\Requests\BackEnd\Categories\Update;
class Categories extends BackEndController
{
    //
    public function __construct(Category $model)
    {
    	parent::__construct($model);
    }

    public function store(Store $request)
    {
    	$this->model::create($request->except(['_token']));
    	return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }// edn store

    public function update($id,Update $request)
    {
        $row = $this->model::findOrFail($id);
        $row->update($request->all());
        return redirect()->route(''.$this->lowerModelNamePlural.'.edit',['id'=>$id]);
    }// end update
}
