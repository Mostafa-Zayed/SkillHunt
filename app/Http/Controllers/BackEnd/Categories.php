<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Category;
use App\Http\Controllers\Controller;
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
    	Category::create($request->all());
    	return redirect()->route(''.$this->lowerModelNamePlural.'.index');
    }
}
