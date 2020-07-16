<?php

if(!function_exists('is_active')){

	function is_active($routeName)
	{
		$part = request()->segment(2);
		if(isset($part) && $part === $routeName){
			return 'active';
		}else{
			return null;
		}
	}
}