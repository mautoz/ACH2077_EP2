<?php
require_once("conecta.php");
require_once("logica-usuario.php");
require_once("banco-usuario.php");

$id = $_POST['id'];
$conta = $_POST['conta'];
$vencimento = $_POST['vencimento'];
$valor = $_POST['valor'];
$tipodeconta = $_POST['tipodeconta'];
$status = $_POST['status'];

if (alterarConta ($conexao, $id, $conta, $vencimento, $valor, $tipodeconta, $status)) {
	header("Location: conta-alterar.php?alterado=true");
}
else {
	header("Location: conta-alterar.php?alterado=false");
}
die();
?>