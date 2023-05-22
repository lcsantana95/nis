<?php 
	/**
	 * Arquivo para realizar as configuracoes das rotas do site
	 */

	$url = $_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI'];

	// Se existir um controllador com a rota
	if (isset($_GET['page']) &&  file_exists('controller/'.$_GET['page'].'.php')) {
 		include $_SERVER['DOCUMENT_ROOT'].'/controller/'.$_GET['page'].'.php';
	// Se existir uma view com a rota
  	} else if (isset($_GET['page']) &&  file_exists('view/'.$_GET['page'].'.html')) {
 		$content = $_SERVER['DOCUMENT_ROOT'].'/view/'.$_GET['page'].'.html';
	} else {
 		include $_SERVER['DOCUMENT_ROOT'].'/controller/inicial.php';
 	}
?>