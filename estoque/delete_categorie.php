<?php
$queries = [];
parse_str($_SERVER["QUERY_STRING"], $queries);

$id = isset($queries["id"]) ? $queries["id"] : null;

try{
	if(!$id || empty($id = trim($id))) throw new Exception("ID is not defined");
	$id = intval($id);
}catch(Exception $error){
	http_response_code(404);
	return;
}

include "conexao.php";
$query = mysqli_query($connection, "DELETE FROM categoria WHERE id_categoria = $id");
