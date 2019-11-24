<?php
	require_once("conecta.php");
	require_once("logica-usuario.php");
	require_once("banco-usuario.php");

	$conta = $_POST['conta'];
	$vencimento = $_POST['vencimento'];
	$valor = $_POST['valor'];
	$tipodeconta = $_POST['tipodeconta'];

	if(cadastrarConta($conexao, $conta, $vencimento, $valor, $tipodeconta, $_SESSION["usuario_id"])) {
		header("Location: conta-nova.php?cadastro=true");
	} else {
		header("Location: conta-nova.php?cadastro=false");		
	}
