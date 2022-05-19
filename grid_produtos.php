<?php
include("includes/layout/main_header.php");
include("includes/conexao.php");
$PDO = conectar();
$sql = "SELECT * FROM produtos";
$result = $PDO->query( $sql );
$produtos = $result->fetchAll(PDO::FETCH_ASSOC);

?>
   <div class="row justify-content-center">
      <div class="row col-md-8" style="padding:0 0 2% 0;">
         <div class="col-md-10">
            <h3>Lista de Produtos</h3>
         </div>
         <div class="col-md-2" >
            <a href="cad_produto.php" title="Cadastrar Produto">
               <ion-icon name="add-circle-outline"></ion-icon>
               Produto
            </a>
         </div>
      </div>
      
      <div class="col-md-8">

         <table id="listar-usuarios" class="table table-striped" style="width:100%">
            <thead>
               <tr>
                  <th scope="col" style="width:10%">SKU</th>
                  <th scope="col" style="width:40%">Nome</th>
                  <th scope="col" style="width:15%">Preço</th>
                  <th scope="col" style="width:15%">Qtde</th>
                  <th scope="col" style="width:20%">Ações</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($produtos as $item){ ?>
                    <tr>
                        <td><?php echo $item['sku']; ?></td>
                        <td><?php echo $item['nome']; ?></td>
                        <td><?php echo str_replace(".",",",$item['preco']); ?></td>
                        <td><?php echo $item['quantidade']; ?></td>
                        <td>
                            <a href="edit_produto.php?sku=<?php echo $item['sku']; ?>" title="Editar"><ion-icon name="create-outline"></ion-icon></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="includes/actions/deletar_produto.php?sku=<?php echo $item['sku']; ?>" title="Excluir"><ion-icon name="trash-outline" class="red"></ion-icon></a>
                        </td> 
                    </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
<?php
include("includes/layout/main_footer.php");
?>