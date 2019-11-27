<?php
require_once("conecta.php");
require_once("logica-usuario.php");
require_once("banco-usuario.php");

$id = $_POST['id'];
$fonte = $_POST['conta'];
$datarecebimento = $_POST['datarecebimento'];
$valor = $_POST['valor'];
$tipodeganho = $_POST['tipodeganho'];



if (alterarGanho ($conexao, $id, $fonte, $datarecebimento, $valor, $tipodeganho)) {
	header("Location: ganho-alterar.php?alterado=true");
}
else {
	header("Location: ganho-alterar.php?alterado=false");
}
die();
?>