<?php

//require_once "common.php";

class File {
	public static function getScriptOutput($path, $print = false)
	{
		ob_start();

		if( is_readable($path) && $path )
			include $path;
		else
			return false;
		if ($print == false)
			return ob_get_clean();
		else
			echo ob_get_clean();
	}
}