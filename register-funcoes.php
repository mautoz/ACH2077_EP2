<?php
	require_once("conecta.php");
	require_once("banco-usuario.php");

	$nome = $_POST['nome'];
	$ultimonome = $_POST['ultimonome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	if(cadastrarUsuario($conexao, $nome, $ultimonome, $email, $senha)) {
		header("Location: register-success.php");
	} else {
		header("Location: register-error.php");		
	}

	
