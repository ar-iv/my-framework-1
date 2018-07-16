<?php 

namespace application\controllers;

use application\core\Controller;

/**
 * MainController
 */
class MainController extends Controller
{
	public function indexAction()
	{
		$this->view->render('Главная страница.');
	}
}

 ?>