<?php 

namespace application\controllers;

use application\core\Controller;

/**
 * AccountController
 */
class AccountController extends Controller
{
	public function loginAction()
	{
		if (!empty($_POST)) {
			$this->view->location('/');
			// $this->view->message('error', 'one');
		}
		// Переадресация
		// $this->view->redirect('/');
		$this->view->render('Страница входа.');
	}

	public function registerAction()
	{
		$this->view->render('Страница регистрации.');
	}
}

 ?>