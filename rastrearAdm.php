<?php
session_start();
include('conexao.php');

if(empty($_POST['codigo'])){
  header('Location: /Horizon-Sotreq/index.html');
  exit();  
}

$codigo = mysqli_real_escape_string($conexao, $_POST['codigo']);
$query = "select codPedido from `horizon-sotreq`.pedido where codPedido='{$codigo}'";
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
   $_SESSION['codPedido'] = $codigo;
   header('Location: /rastreamentoAdm.html');
   exit();
} else {
	header('Location: /adm.html');
	exit();
}

?>