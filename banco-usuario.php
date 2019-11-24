<?php
require_once("conecta.php");
function buscaUsuario($conexao, $email, $senha) {
	//$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select * from users where email = '{$email}' AND senha = '{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);

	return $usuario;
}

function cadastrarUsuario($conexao, $nome, $ultimonome, $email, $senha) {
	$query = "insert into users (nome, ultimonome, email, senha) values ('{$nome}', '{$ultimonome}', '{$email}', '{$senha}');";
	$resultadoDoCadastro = mysqli_query($conexao, $query);
	return $resultadoDoCadastro;
}	

function cadastrarConta($conexao, $conta, $vencimento, $valor, $tipodeconta, $iduser) {
	$query = "insert into boletos (id_user, nomeconta, categoria, valor, vencimento) values ('{$iduser}', '{$conta}', '{$tipodeconta}', '{$valor}', '{$vencimento}');";
	$resultadoDoCadastro = mysqli_query($conexao, $query);
	return $resultadoDoCadastro;
}	