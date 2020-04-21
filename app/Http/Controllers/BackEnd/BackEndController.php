<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
class BackEndController extends Controller {
	
	protected $model;
	protected $modelName;
    protected $modelNamePlural;
	protected $lowerModelNamePlural;

	public function __construct(Model $model)
	{
		$this->model = $model;
		$this->modelName = $this->setModelName();
        $this->modelNamePlural = $this->setModelNamePlural();
        $this->lowerModelNamePlural = $this->setLowerModelNamePlural();
	}

	private function setModelName()
	{
		return class_basename($this->model);
	}

    private function setModelNamePlural()
    {
        return str_plural($this->modelName);
    }

    private function setLowerModelNamePlural()
    {
        return strtolower($this->modelNamePlural);
    }

	protected function filter($rows)
	{
		return $rows;
	}
	/**
	* determane The users Index Page
	* 
	* @return View
	*/
    public function index()
    {
        $pageTitle = 'Control '.$this->modelNamePlural;
        $method    = __FUNCTION__;
    	$rows      = $this->model;
    	$rows      = $this->filter($rows);
    	$rows      = $rows->paginate(2);
    	
    	return view('back-end.'.$this->lowerModelNamePlural.'.'.$method,[
    		'pageTitle' =>$pageTitle,
    		'model'=>$this->modelName,
    		'models'=>$this->lowerModelNamePlural,
            'method'  => ucfirst($method),
            'rows'      => $rows
    	]);
    }
	
	public function create()
    {
        $method = __FUNCTION__;
    	$pageTitle = ucwords($method.' '.$this->modelName);
    	return view('back-end.'.$this->lowerModelNamePlural.'.'.$method,[
    		'pageTitle'=>$pageTitle,
    		'model'=>$this->modelName,
    		'models'=>$this->lowerModelNamePlural,
            'method'  => ucfirst($method)
    	]);
    	
    }

    public function edit($id)
    {
        $method = __FUNCTION__;
    	$pageTitle = ucwords($method.' '.$this->modelName);
        $row = $this->model::findOrFail($id);
        return view('back-end.'.$this->lowerModelNamePlural.'.'.$method,[
        	'row'=>$row,
        	'pageTitle'=>$pageTitle,
            'method'=>ucfirst($method),
        	'model'=>$this->modelName,
        	'models'=>$this->lowerModelNamePlural
        ]);

    }

    public function destroy($id)
    {
         $this->model::findOrFail($id)->delete();
         return redirect()->route(''.$this->lowerModelNamePlural.'.index');
    }
	
}