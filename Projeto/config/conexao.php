<?php
	$server = 'localhost';
	$database = 'gesuas';

	$user = 'gesuas'; 
	$password = '123456'; 

	try {
		$conexao = new PDO('mysql:host='.$server.';dbname='.$database, $user, $password);
	} catch (PDOException $e) {
		//Utilizado para debugar erros no MySQL
		//print "Error!: " . $e->getMessage() . "<br/>";
		//die();

		//Erro amigável de exibição ao usuário
		error_reporting(0);
		  print('<div style="margin: 50px auto; overflow: hidden; width: 100%;font-family: arial;">
					 <div style="margin: 0px auto; width: 80%;">
					  <img alt="Estamos em manutenção" title="Estamos em manutenção" src="/asset/img/sem-conexao.jpg" style="float: left; margin-right: 30px; display: block;">
					  <h1 style="color:#0067a6;">Estamos em manutenção</h1>
					  <p style="font-size: 17px;">Dentro de instantes, o sistema será restabelecido.</p>
					 </div>
				 </div>');

		  exit;
	}
?>