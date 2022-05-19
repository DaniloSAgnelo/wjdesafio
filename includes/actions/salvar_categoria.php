<?php
require_once "../conexao.php";

$action = $_POST['action'];
$get_id = $_POST['get_id'];

$nome = $_POST['nome'];

$PDO = conectar();
if($action=='inc'){
	$sql = "INSERT INTO categorias (nome) VALUES ('".$nome."')";
}
else{
	$sql = "UPDATE categorias SET nome = 	'".$nome."'	WHERE id = ".$get_id;
}
$stmt = $PDO->prepare( $sql );
$result = $stmt->execute();
header("Location: ../../grid_categorias.php");
die();
?>