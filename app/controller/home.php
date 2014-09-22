<?php

/**
* qiniu DEMO
* 管理七牛文件
* 
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
	function page($page)
	{
		V('qiniu/'.$page);
	}
	function test()
	{
		dump(Request::server());
	}
	function hello2()
	{

		
  	  	
	}



}

