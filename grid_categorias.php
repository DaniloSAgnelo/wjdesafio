<?php
include("includes/layout/main_header.php");
include("includes/conexao.php");
$PDO = conectar();
$sql = "SELECT * FROM categorias";
$result = $PDO->query( $sql );
$categorias = $result->fetchAll(PDO::FETCH_ASSOC);

?>
   <div class="row justify-content-center">
      <div class="row col-md-8" style="padding:0 0 2% 0;">
         <div class="col-md-10">
            <h3>Lista de Categorias</h3>
         </div>
         <div class="col-md-2" >
            <a href="cad_categoria.php" title="Cadastrar Categoria">
               <ion-icon name="add-circle-outline"></ion-icon>
               Categoria
            </a>
         </div>
      </div>
      
      <div class="col-md-8">

         <table id="listar-usuarios" class="table table-striped" style="width:100%">
            <thead>
               <tr>
                  <th scope="col" style="width:10%">#</th>
                  <th scope="col" style="width:70%">Nome</th>
                  <th scope="col" style="width:20%">Ações</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($categorias as $item){ ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['nome']; ?></td>
                        <td>
                            <a href="edit_categoria.php?id=<?php echo $item['id']; ?>" title="Editar"><ion-icon name="create-outline"></ion-icon></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="includes/actions/deletar_categoria.php?id=<?php echo $item['id']; ?>" title="Excluir"><ion-icon name="trash-outline" class="red"></ion-icon></a>
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