<?php

$host = "localhost";
$port = 3309;
$user = "root";
$password = "";
$dbName = "estoque";

$connection = mysqli_connect($host, $user, $password, $dbName, $port);

if($connection){
//	echo "Conectado com sucesso";
	$conectou = true;
}else{
//	echo "Falha na conexão";
	$conectou = false;
}

?>
