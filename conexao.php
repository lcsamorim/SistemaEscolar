<?php 
	$host = "localhost";
	$banco = "escola";
	$usuario ="root";
    $senha = "admin";

	try{
		$conexao = new PDO("mysql:host=$host;port=3306;dbname=$banco",$usuario,$senha);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Conexão realizada com sucesso!";
	}

	catch(PDOException $e) {
	 	echo 'Error: ' . $e->getMessage();
	}