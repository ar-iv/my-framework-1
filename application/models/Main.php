<?php 

namespace application\models;

use application\core\Model;


/**
 * Main
 */
class Main extends Model
{
	public function getNews()
	{
		$result = $this->db->row('SELECT title, test FROM news');
		return $result;
	}
}

 ?>