<?php

session_start();
$timeout = 1800;

function usuarioEstaLogado() {
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
	if(!usuarioEstaLogado()) {
		$_SESSION["danger"] = "Você não tem acesso a essa funcionalidade.";
		header("Location: index.php");
		die();
	}
}

function usuarioLogado() {
	return $_SESSION["usuario_logado"];
}

function logaUsuario($nome, $id) {
	$_SESSION["usuario_logado"] = $nome;
	$_SESSION["usuario_id"] = $id;
}

function logout () {
	session_destroy();
	session_start();
}