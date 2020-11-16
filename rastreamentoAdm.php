<?php

session_start();
include('conexao.php');

$pagamento = mysqli_real_escape_string($conexao, trim($_POST['pagamento']));
$emprestimo = mysqli_real_escape_string($conexao, trim($_POST['emprestimo']));
$prazo = mysqli_real_escape_string($conexao, trim($_POST['prazo']));
$local1 = mysqli_real_escape_string($conexao, trim($_POST['local1']));
$local2 = mysqli_real_escape_string($conexao, trim($_POST['local2']));
$local3 = mysqli_real_escape_string($conexao, trim($_POST['local3']));
$local4 = mysqli_real_escape_string($conexao, trim($_POST['local4']));
$local5 = mysqli_real_escape_string($conexao, trim($_POST['local5']));
$local6 = mysqli_real_escape_string($conexao, trim($_POST['local6']));
$local7 = mysqli_real_escape_string($conexao, trim($_POST['local7']));
$local8 = mysqli_real_escape_string($conexao, trim($_POST['local8']));
$local9 = mysqli_real_escape_string($conexao, trim($_POST['local9']));

if($emprestimo == "Aprovado")
{
	$sql9 ="UPDATE `horizon-sotreq`.`pedido` SET `emprestimo` = '1' WHERE (`codPedido` = '{$_SESSION['codPedido']}')";
	$result10 = mysqli_query($conexao, $sql9);
}else if($emprestimo == "Aguardo")
{
	$sql12 ="UPDATE `horizon-sotreq`.`pedido` SET `emprestimo` = '0' WHERE (`codPedido` = '{$_SESSION['codPedido']}')";
	$result13 = mysqli_query($conexao, $sql12);
}

if($pagamento == "Aprovado")
{
	$sql11 ="UPDATE `horizon-sotreq`.`pedido` SET `pagamento` = '1' WHERE (`codPedido` = '{$_SESSION['codPedido']}')";
	$result12 = mysqli_query($conexao, $sql11);
} else if($pagamento == "Aguardo")
{
	$sql13 ="UPDATE `horizon-sotreq`.`pedido` SET `pagamento` = '0' WHERE (`codPedido` = '{$_SESSION['codPedido']}')";
	$result14 = mysqli_query($conexao, $sql13);
}

if(!empty($_POST['prazo'])){
$sql14 ="UPDATE `horizon-sotreq`.`pedido` SET `prazo` = '{$prazo}' WHERE (`codPedido` = '{$_SESSION['codPedido']}')";
$result15 = mysqli_query($conexao, $sql14);
}

if(!empty($_POST['local1'])){
$sql ="UPDATE `horizon-sotreq`.`rastreamento` SET `local` = '{$local1}', `data` =NOW() WHERE (`codFases` = '1') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result1 = mysqli_query($conexao, $sql);
}

if(!empty($_POST['local2'])){
$sql1 ="UPDATE `horizon-sotreq`.`rastreamento` SET `local` = '{$local2}', `data` =NOW() WHERE (`codFases` = '2') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result2 = mysqli_query($conexao, $sql1);
}

if(!empty($_POST['local3'])){
$sql2 ="UPDATE `horizon-sotreq`.`rastreamento` SET `local` = '{$local3}', `data` =NOW() WHERE (`codFases` = '3') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result3 = mysqli_query($conexao, $sql2);
}

if(!empty($_POST['local4'])){
$sql3 ="UPDATE `horizon-sotreq`.`rastreamento` SET `local` = '{$local4}', `data` =NOW() WHERE (`codFases` = '4') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result4 = mysqli_query($conexao, $sql3);
}

if(!empty($_POST['local5'])){
$sql4 ="UPDATE `horizon-sotreq`.`rastreamento` SET `local` = '{$local5}', `data` =NOW() WHERE (`codFases` = '5') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result5 = mysqli_query($conexao, $sql4);
}

if(!empty($_POST['local6'])){
$sql5 ="UPDATE `horizon-sotreq`.`rastreamento` SET `local` = '{$local6}', `data` =NOW() WHERE (`codFases` = '6') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result6 = mysqli_query($conexao, $sql5);
}

if(!empty($_POST['local7'])){
$sql6 ="UPDATE `horizon-sotreq`.`rastreamento` SET `local` = '{$local7}', `data` =NOW() WHERE (`codFases` = '7') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result7 = mysqli_query($conexao, $sql6);
}

if(!empty($_POST['local8'])){
$sql7 ="UPDATE `horizon-sotreq`.`rastreamento` SET `local` = '{$local8}', `data` =NOW() WHERE (`codFases` = '8') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result8 = mysqli_query($conexao, $sql7);
}

if(!empty($_POST['local9'])){
$sql8 ="UPDATE `horizon-sotreq`.`rastreamento` SET `local` = '{$local9}', `data` =NOW() WHERE (`codFases` = '9') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result9 = mysqli_query($conexao, $sql8);
}


$sql10 = "select count(*) as total from `horizon-sotreq`.pedido where codPedido='{$codigo}'";
$result11 = mysqli_query($conexao, $sql);
$row2 = mysqli_fetch_assoc($result);

	header('Location: /admIndex.html');
	exit;

?>