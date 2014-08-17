<?php

/**
* qiniu DEMO
*/
class home extends base
{
	
	function __construct()
	{
		
	}
	function index()
	{
     	V('qiniu/index');
     
	}
	function test()
	{
		dump(Request::server());
	}
	function hello2()
	{

    	
	}



}

