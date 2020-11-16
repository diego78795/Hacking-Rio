<?php

session_start();
include('conexao.php');

$sql ="DELETE FROM `horizon-sotreq`.`rastreamento` WHERE (`codFases` = '1') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result1 = mysqli_query($conexao, $sql);

$sql1 ="DELETE FROM `horizon-sotreq`.`rastreamento` WHERE (`codFases` = '2') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result2 = mysqli_query($conexao, $sql1);

$sql2 ="DELETE FROM `horizon-sotreq`.`rastreamento` WHERE (`codFases` = '3') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result3 = mysqli_query($conexao, $sql2);

$sql3 ="DELETE FROM `horizon-sotreq`.`rastreamento` WHERE (`codFases` = '4') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result4 = mysqli_query($conexao, $sql3);

$sql4 ="DELETE FROM `horizon-sotreq`.`rastreamento` WHERE (`codFases` = '5') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result5 = mysqli_query($conexao, $sql4);

$sql5 ="DELETE FROM `horizon-sotreq`.`rastreamento` WHERE (`codFases` = '6') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result6 = mysqli_query($conexao, $sql5);

$sql6 ="DELETE FROM `horizon-sotreq`.`rastreamento` WHERE (`codFases` = '7') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result7 = mysqli_query($conexao, $sql6);

$sql7 ="DELETE FROM `horizon-sotreq`.`rastreamento` WHERE (`codFases` = '8') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result8 = mysqli_query($conexao, $sql7);

$sql8 ="DELETE FROM `horizon-sotreq`.`rastreamento` WHERE (`codFases` = '9') and (`codPedido` = '{$_SESSION['codPedido']}')";
$result9 = mysqli_query($conexao, $sql8);

$sql9 ="DELETE FROM `horizon-sotreq`.`pedido` WHERE (`codPedido` = '{$_SESSION['codPedido']}')";
$result10 = mysqli_query($conexao, $sql9);


$sql10 = "select count(*) as total from `horizon-sotreq`.pedido where codPedido='{$codigo}'";
$result11 = mysqli_query($conexao, $sql);
$row2 = mysqli_fetch_assoc($result);

    session_destroy();
	header('Location: /admIndex.html');
	exit;

?>