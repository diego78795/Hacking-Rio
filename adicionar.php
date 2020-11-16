<?php

session_start();
include('conexao.php');

$codigo = mysqli_real_escape_string($conexao, trim($_POST['codigo']));
$prazo = mysqli_real_escape_string($conexao, trim($_POST['prazo']));

$sql = "select count(*) as total from `horizon-sotreq`.pedido where codPedido='{$codigo}'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	header('Location: /Horizon-Sotreq/adicionar.html');
	exit;
}

$sql ="INSERT INTO `horizon-sotreq`.pedido (codPedido, prazo, pagamento, emprestimo) VALUES ('{$codigo}', '{$prazo}', '0', '0')";
$result = mysqli_query($conexao, $sql);

$sql1 ="INSERT INTO `horizon-sotreq`.rastreamento (codPedido, codFases, local, data) VALUES ('{$codigo}', '1', 'u', '0000-00-00')";
$result2 = mysqli_query($conexao, $sql1);

$sql2 ="INSERT INTO `horizon-sotreq`.rastreamento (codPedido, codFases, local, data) VALUES ('{$codigo}', '2', 'u', '0000-00-00')";
$result3 = mysqli_query($conexao, $sql2);

$sql3 ="INSERT INTO `horizon-sotreq`.rastreamento (codPedido, codFases, local, data) VALUES ('{$codigo}', '3', 'u', '0000-00-00')";
$result4 = mysqli_query($conexao, $sql3);

$sql4 ="INSERT INTO `horizon-sotreq`.rastreamento (codPedido, codFases, local, data) VALUES ('{$codigo}', '4', 'u', '0000-00-00')";
$result5 = mysqli_query($conexao, $sql4);

$sql5 ="INSERT INTO `horizon-sotreq`.rastreamento (codPedido, codFases, local, data) VALUES ('{$codigo}', '5', 'u', '0000-00-00')";
$result6 = mysqli_query($conexao, $sql5);

$sql6 ="INSERT INTO `horizon-sotreq`.rastreamento (codPedido, codFases, local, data) VALUES ('{$codigo}', '6', 'u', '0000-00-00')";
$result7 = mysqli_query($conexao, $sql6);

$sql7 ="INSERT INTO `horizon-sotreq`.rastreamento (codPedido, codFases, local, data) VALUES ('{$codigo}', '7', 'u', '0000-00-00')";
$result8 = mysqli_query($conexao, $sql7);

$sql8 ="INSERT INTO `horizon-sotreq`.rastreamento (codPedido, codFases, local, data) VALUES ('{$codigo}', '8', 'u', '0000-00-00')";
$result9 = mysqli_query($conexao, $sql8);

$sql9 ="INSERT INTO `horizon-sotreq`.rastreamento (codPedido, codFases, local, data) VALUES ('{$codigo}', '9', 'u', '0000-00-00')";
$result10 = mysqli_query($conexao, $sql9);

$sql10 = "select count(*) as total from `horizon-sotreq`.pedido where codPedido='{$codigo}'";
$result11 = mysqli_query($conexao, $sql);
$row2 = mysqli_fetch_assoc($result);

	header('Location: /admIndex.html');
	exit;


?>