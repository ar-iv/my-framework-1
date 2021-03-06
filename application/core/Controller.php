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
    public $acl;

    public function __construct($route)
    {
        $this->route = $route;
        if (!$this->checkAcl()) {
            View::errorCode(403);
        }

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

    public function checkAcl()
    {
        $this->acl = require 'application/acl/'.$this->route['controller'].'.php';
        if ($this->isAcl('all')) {
            return true;
        }
        elseif (isset($_SESSION['autorizr']['id']) and $this->isAcl('authorize')) {
            return true;
        }
        elseif (!isset($_SESSION['autorizr']['id']) and $this->isAcl('guest')) {
            return true;
        }
        elseif (isset($_SESSION['admin']['id']) and $this->isAcl('admin')) {
            return true;
        }
        return false;
    }

    public function isAcl($key)
    {
        return in_array($this->route['action'], $this->acl[$key]);
    }
}

 ?>