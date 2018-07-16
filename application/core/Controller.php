<?php 

namespace application\core;

/**
 * Controller
 */
abstract class Controller
{

	public $route;

    /**
     * summary
     */
    public function __construct($route)
    {
        $this->route = $route;
    }
}

 ?>