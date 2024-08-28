<?php
	if($_GET)
	{
		require_once "Cliente.class.php";
		
		//$obj = new Cliente( $_GET["sobrenome"], $_GET["nome"], $_GET["cpf"]);
		$obj = new Cliente(cpf:$_GET["cpf"], sobrenome:$_GET["sobrenome"], nome:$_GET["nome"] );
		
		//abrir conexão com o BD
		$conect = $obj->conexao();
		
		/*$obj->nome = $_GET["nome"];
		$obj->sobrenome = $_GET["sobrenome"];
		$obj->cpf = $_GET["cpf"];*/
		
		$msg = $obj->inserir($conect);
		
	   header("location:index.php?msg=$msg");
	   die();
		
		
		/*echo "<pre>";
		var_dump($obj);
		echo "</pre>";*/




		/*echo "<h1 style='color:blue'>O nome é " . $_GET["nome"] . "</h1><br>";
		
		echo "O Sobrenome é {$_GET["sobrenome"]}<br>";*/
	}
	else
	{
		header("location:index.html");
	}
?>