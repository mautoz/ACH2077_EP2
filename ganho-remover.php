<?php
require_once("conecta.php");
require_once("logica-usuario.php");
require_once("banco-usuario.php");

$id = $_POST['id'];

removerGanho ($conexao, $id);
header("Location: dashboard.php?gremovido=true");
die();
?>