<?php
include('conexao.php');

$codigo = mysqli_real_escape_string($conexao, $_SESSION['codPedido']);
$query = "select * from `horizon-sotreq`.pedido where codPedido='{$codigo}'";
$result = mysqli_query($conexao, $query);
$Dados = mysqli_fetch_assoc($result);
$Praz = $Dados['prazo'];
$Pag = $Dados['pagamento'];
$Emp = $Dados['emprestimo'];

for ($i=1;$i<=9;$i++){
  $query2 = "select * from `horizon-sotreq`.rastreamento where codPedido='{$codigo}' and codFases='{$i}'";
  $result2 = mysqli_query($conexao, $query2);
  $Dados2 = mysqli_fetch_assoc($result2);
  $Local[$i] = $Dados2['local'];
  $Data[$i] = $Dados2['data'];
}

?>