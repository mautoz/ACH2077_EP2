<?php 
require_once("banco-usuario.php");
require_once("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
setcookie("usuario_logado", $usuario['nome']);

if ($usuario == null) {
	$_SESSION["danger"] = "Usuário ou senha inválido.";
	header("Location: login-error.php");
}
else {
	$_SESSION["success"] = "Usuário logado com sucesso.";
	$_SESSION['ultima_acao'] = time();
	logaUsuario($usuario["nome"], $usuario["id"]);
	header("Location: dashboard.php");
}
die();