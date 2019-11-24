<?php
require_once("conecta.php");
function buscaUsuario ($conexao, $email, $senha) {
	//$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select * from users where email = '{$email}' AND senha = '{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);

	return $usuario;
}

function cadastrarUsuario ($conexao, $nome, $ultimonome, $email, $senha) {
	$query = "insert into users (nome, ultimonome, email, senha) values ('{$nome}', '{$ultimonome}', '{$email}', '{$senha}');";
	$resultadoDoCadastro = mysqli_query($conexao, $query);
	return $resultadoDoCadastro;
}	

function cadastrarConta ($conexao, $conta, $vencimento, $valor, $tipodeconta, $status, $iduser) {
	$query = "insert into boletos (id_user, nomeconta, categoria, valor, vencimento, status) values ('{$iduser}', '{$conta}', '{$tipodeconta}', '{$valor}', '{$vencimento}', '{$status}');";
	$resultadoDoCadastro = mysqli_query($conexao, $query);
	return $resultadoDoCadastro;
}	

function cadastrarGanho ($conexao, $conta, $datarecebimento, $valor, $tipodeganho, $iduser) {
	$query = "insert into ganhos (id_user, fonte, categoria, valor, data) values ('{$iduser}', '{$conta}', '{$tipodeganho}', '{$valor}', '{$datarecebimento}');";
	$resultadoDoCadastro = mysqli_query($conexao, $query);
	return $resultadoDoCadastro;
}	

function buscarContas ($conexao, $iduser) {
	$contas = array();
	$resultado = mysqli_query($conexao, "select * from boletos where id_user = '{$iduser}'");

	while ($conta = mysqli_fetch_assoc($resultado)) {
		array_push($contas, $conta);
	}
	return $contas;
}	

function buscarGanhos ($conexao, $iduser) {
	$ganhos = array();
	$resultado = mysqli_query($conexao, "select * from ganhos where id_user = '{$iduser}'");

	while ($ganho = mysqli_fetch_assoc($resultado)) {
		array_push($ganhos, $ganho);
	}
	return $ganhos;
}	

function somaContas ($conexao, $iduser) {
	$query = "select sum(valor) as soma from boletos where id_user = '{$iduser}'";
	$resultado = mysqli_fetch_assoc(mysqli_query($conexao, $query));
	return $resultado['soma'];
}

function somaGanhos ($conexao, $iduser) {
	$query = "select sum(valor) as soma from ganhos where id_user = '{$iduser}'";
	$resultado = mysqli_fetch_assoc(mysqli_query($conexao, $query));
	return $resultado['soma'];
}

function boletosPendentes ($conexao, $iduser) {
	$query = "select count(status) as quantidade from boletos where id_user = '{$iduser}' AND status = 'pendente'";
	$resultado = mysqli_fetch_assoc(mysqli_query($conexao, $query));
	return $resultado['quantidade'];
}

function boletosPagos ($conexao, $iduser) {
	$query = "select count(status) as quantidade from boletos where id_user = '{$iduser}' AND status = 'pago'";
	$resultado = mysqli_fetch_assoc(mysqli_query($conexao, $query));
	return $resultado['quantidade'];
}