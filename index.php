<?php 

require 'application/lib/Dev.php';

use application\core\Router;

spl_autoload_register(function ($class)
{
	// Заменя слешей
	$path = str_replace('\\', '/', $class.'.php');

	// Проверка существования файла, папки
	if (file_exists($path)) {
		require $path;
		// echo $path;
	}
});

session_start();

$router = new Router;
$router->run();

 ?>