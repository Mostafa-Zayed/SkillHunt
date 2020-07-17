<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function category($id)
    {
        $category = Category::findOrFail($id);
        $jobs = Job::where('category_id',$id)->orderBy('id','desc')->paginate(10);
        return view('front-end.category.index',['category'=>$category,'jobs'=>$jobs]);
    }
}
