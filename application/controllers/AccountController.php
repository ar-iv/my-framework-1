<?php 

namespace application\controllers;

use application\core\Controller;

/**
 * AccountController
 */
class AccountController extends Controller
{
	
	// function __construct()
	// {
		
	// }

	public function loginAction()
	{
		echo 'Страница входа.';
	}

	public function registerAction()
	{
		echo 'Страница регистрации.';
		var_dump($this->route);
	}
}

 ?>