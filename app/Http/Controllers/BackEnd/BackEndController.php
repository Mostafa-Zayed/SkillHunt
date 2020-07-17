<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;
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
		$this->modelName = class_basename($model);
        $this->modelNamePlural = str_plural($this->modelName);
        $this->lowerModelNamePlural = strtolower($this->modelNamePlural);
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
    	$rows      = $this->model;
    	$rows      = $this->filter($rows);
    	$rows      = $rows->paginate(10);
    	return view('back-end.'.$this->lowerModelNamePlural.'.'.__FUNCTION__,[
    	    'rows' => $rows,
            'models' => $this->lowerModelNamePlural,
            'function' => __FUNCTION__
        ]);
    }

	public function create()
    {
    	return view('back-end.'.$this->lowerModelNamePlural.'.'.__FUNCTION__,[
    		'models' => $this->lowerModelNamePlural,
            'function' => __FUNCTION__
    	]);
    }// end Create

    public function edit($id)
    {
        $row = $this->model::findOrFail($id);
        return view('back-end.'.$this->lowerModelNamePlural.'.'.__FUNCTION__,[
        	'row'=>$row,
            'function' => __FUNCTION__,
        	'models'=>$this->lowerModelNamePlural
        ]);
    }// end Edit

    public function destroy($id)
    {
         $this->model::findOrFail($id)->delete();
         return redirect()->route(''.$this->lowerModelNamePlural.'.index');
    }// end Destroy

}
