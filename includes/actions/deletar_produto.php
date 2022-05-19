<?php
require_once "../conexao.php";

$sku = $_GET['sku'];

$PDO = conectar();

$sql = "DELETE FROM produtos WHERE sku = ".$sku;
//echo $sql;
$stmt = $PDO->prepare( $sql );
$result = $stmt->execute();
header("Location: ../../grid_produtos.php");
die();
?>