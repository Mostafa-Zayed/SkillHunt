<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
class Pages extends BackEndController
{
    //
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        $this->model::create($request->except(['_token']));
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        $row = $this->model::findOrFail($id)->update($request->except(['_token','_method']));
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }
}
