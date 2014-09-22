<?php
/**
*  user console page
*  user must login first
*/
class console
{
	
	function __construct()
	{
		// session_set('USERID',1);
		self::isLogin();
	}
	private static function isLogin()
	{
		if(!($userid=session_get('USERID')))
		{
			if(Request::isAjax())
			{
				exit(json_encode(array('code'=>-1,'msg'=>'please login')));
			}
			else
			{
				exit(app::run(array('home','page','login')));
			}
		}
		return $userid;
	}
	/**
	 * console home index page
	 */
	function index()
	{
		V('qiniu/console');
	}
	function logout()
	{

	} 

}