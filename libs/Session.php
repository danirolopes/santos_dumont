<?php


class Session
{
	public static function init()
	{
		@session_start();

		if (!isset($_SESSION['initiated']))
		{
		    session_regenerate_id();
		    $_SESSION['initiated'] = true;
		}

		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) {
		    // last request was more than 30 minutes ago
		    session_unset();     // unset $_SESSION variable for the run-time 
		    session_destroy();   // destroy session data in storage
		}
		$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
	}

	public static function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	public static function get($key)
	{
		if(isset($_SESSION[$key]))
		{
			return $_SESSION[$key];
		}
		return false;
	}
	public static function destroy()
	{
		//unset($_SESSION);
		session_destroy();
	}

	public static function change_id()
	{
		session_regenerate_id();
		$_SESSION['initiated'] = true;
	}

	public static function message()
	{
		if(isset($_SESSION['message']))
		{
			$message = $_SESSION['message'];
			unset($_SESSION['message']);
			return $message;
		}
	}	
}

?>