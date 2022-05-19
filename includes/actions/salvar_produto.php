<?php
require_once "../conexao.php";

$action = $_POST['action'];
$get_sku = $_POST['get_sku'];
$nome = $_POST['nome'];
$sku = $_POST['sku'];
$preco = str_replace(',','.',$_POST['preco']);
$quantidade = $_POST['quantidade'];
$descricao = $_POST['descricao'];
$categoria = json_encode($_POST['categoria'], true);
echo $action;
$PDO = conectar();
if($action=='inc'){
	$sql = "INSERT INTO produtos (nome, sku, descricao, preco, quantidade, categoria)
			VALUES ('".$nome."','".$sku."','".$descricao."','".$preco."','".$quantidade."','".$categoria."')";
}
else{
	$sql = "UPDATE produtos set
			nome = 	'".$nome."',
			sku = '".$sku."',	
			descricao = 	'".$descricao."',
			preco = 	'".$preco."',
			quantidade = 	'".$quantidade."',
			categoria = 	'".$categoria."'
			WHERE sku = ".$get_sku."
	";
}
$stmt = $PDO->prepare( $sql );
$result = $stmt->execute();
header("Location: ../../grid_produtos.php");
die();
?>