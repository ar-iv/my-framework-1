<?php 

// Вывод ошибок на экран
ini_set('display_errors', 1);
// Отчёт об ошибках (E_ALL)
error_reporting(E_ALL);

// Функция проверки
function debug($str) {
	echo "<pre>";
	var_dump($str);
	echo "</pre>";
	exit;
}

 ?>