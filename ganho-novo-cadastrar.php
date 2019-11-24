<?php
	require_once("conecta.php");
	require_once("logica-usuario.php");
	require_once("banco-usuario.php");

	$conta = $_POST['conta'];
	$datarecebimento = $_POST['datarecebimento'];
	$valor = $_POST['valor'];
	$tipodeganho = $_POST['tipodeganho'];

	if(cadastrarGanho($conexao, $conta, $datarecebimento, $valor, $tipodeganho, $_SESSION["usuario_id"])) {
		header("Location: ganho-novo.php?ganho=true");
	} else {
		header("Location: ganho-novo.php?ganho=false");		
	}
