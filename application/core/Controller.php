<?php 

namespace application\core;

use application\core\View;

/**
 * Controller
 */
abstract class Controller
{
	public $route;
	public $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    // Загрузка моделей
    public function loadModel($name)
    {
    	$path = 'application\models\\'.ucfirst($name);
    	// Проверка наличия класса
    	if (class_exists($path)) {
    		return new $path;
    	}
    }
}

 ?>