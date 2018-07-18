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
		$result = $this->model->getNews();
		$vars = [
			'news' => $result,
		];
		$this->view->render('Главная страница.', $vars);

		
		// debug($result);
	}
}

 ?>