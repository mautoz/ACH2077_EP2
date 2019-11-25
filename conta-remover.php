<?php
require_once("conecta.php");
require_once("logica-usuario.php");
require_once("banco-usuario.php");

$id = $_POST['id'];

removerConta ($conexao, $id);
header("Location: dashboard.php?removido=true");
die();
?>