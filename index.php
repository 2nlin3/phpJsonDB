<?php

use app\core\Router;

define('MY_APP', true);

spl_autoload_register(function($class)
{
	$path = str_replace('\\', '/', "$class.php");

	if(file_exists($path))
	{
		require_once $path;
	}
	else
	{
		throw new Exception("No such file for autoload: $path");
		exit;
	}
});

$router = new router;
$router->run();
