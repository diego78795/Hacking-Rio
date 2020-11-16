<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'rootRio2020');
define('SENHA', 'HorizonRio2020');
define('DB', 'horizon-sotreq');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');

?>