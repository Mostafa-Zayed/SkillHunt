<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
class BackEndController extends Controller {
	
	protected $model;
	protected $modelName;
	protected $modelNamePlural;

	public function __construct(Model $model)
	{
		$this->model = $model;
		$this->modelName = $this->setModelName($model);
		$this->modelNamePlural = $this->setModelNamePlural($this->modelName);
	}

	private function setModelName($model)
	{
		return strtolower(class_basename($model));
	}

	private function setModelNamePlural()
	{
		return str_plural($this->modelName);
	}

	/**
	* determane The users Index Page
	* 
	* @return View
	*/
    public function index()
    {
    	$rows = $this->model::paginate(2);
    	return view('back-end.'.$this->modelNamePlural.'.index',compact('rows'));
    }
	
	public function create()
    {
    	return view('back-end.'.$this->modelNamePlural.'.create');
    }

    public function edit($id)
    {
        $row = $this->model::findOrFail($id);
        return view('back-end.'.$this->modelNamePlural.'.edit',compact('row'));
    }

    public function destroy($id)
    {
         $this->model::findOrFail($id)->delete();
         return redirect()->route(''.$this->modelNamePlural.'.index');
    }
	
}