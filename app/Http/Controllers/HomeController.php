<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Type;
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
        $categories = Category::get();
        $pages = Page::get();
        $types = Type::get();
        return view('welcome',['categories'=>$categories,'pages'=>$pages,'types'=>$types]);
    }

    public function category($id)
    {
        $category = Category::findOrFail($id);
        $jobs = Job::where('category_id',$id)->orderBy('id','desc')->paginate(10);
        return view('front-end.category.index',['category'=>$category,'jobs'=>$jobs]);
    }
}
