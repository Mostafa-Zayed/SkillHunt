<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Home extends Controller
{

    public function index(){

    	return view('back-end.'.__FUNCTION__,['function'=>__FUNCTION__]);
    }
}
