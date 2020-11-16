<?php 
session_start(); 
if(!$_SESSION['codPedido']){ 
header('Location: /index.html'); 
exit(); 
}
?>