<?php
error_reporting(0);
require_once "../conexao.php";
$PDO = conectar();
$id = $_GET['id'];


$sql = "SELECT sku, categoria FROM produtos where categoria like '%".$id."%'";
$result = $PDO->query( $sql );
$result = $result->fetchAll(PDO::FETCH_ASSOC);

if($result){
   for($i=0;$i <= count($result);$i++){
      if($result[$i]['categoria']){
         $arr = json_decode($result[$i]['categoria']);
         $key = array_search($id, $arr);
         if($key!==false){
            unset($arr[$key]);
         }
         $sql = "UPDATE produtos SET categoria = 	'".json_encode($arr,true)."'	WHERE sku = ".$result[$i]['sku'];
         $stmt = $PDO->prepare( $sql );
         $rs = $stmt->execute();
      }
      
   }
}

$sql = "DELETE FROM categorias WHERE id = ".$id;
$stmt = $PDO->prepare( $sql );
$rs = $stmt->execute();
header("Location: ../../grid_categorias.php");
die();
?>