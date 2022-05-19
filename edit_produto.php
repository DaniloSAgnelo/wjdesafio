<?php
include("includes/layout/main_header.php");
include("includes/conexao.php");

$PDO = conectar();
$sku = $_GET['sku'];
$sql = "SELECT nome, sku, preco, quantidade, descricao, categoria FROM produtos where sku = ".$sku;
$result = $PDO->query( $sql );
$produto = $result->fetch(PDO::FETCH_ASSOC);
$cat = json_decode($produto['categoria'],true);

$sql = "SELECT id, nome FROM categorias";
$result = $PDO->query( $sql );
$categorias = $result->fetchAll(PDO::FETCH_ASSOC);



?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Produto</div>

                <div class="card-body">
                    <form id="myForm" method="POST" action="includes/actions/salvar_produto.php" enctype="multipart/form-data">
                    <input id="action" type="hidden" name="action" value="edit">
                    <input id="get_sku" type="hidden" name="get_sku" value="<?php echo $sku; ?>">
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" required autocomplete="Nome" autofocus value="<?php echo $produto['nome']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sku" class="col-md-4 col-form-label text-md-right">SKU</label>
                            <div class="col-md-6">
                                <input id="sku" type="text" onkeypress="$(this).mask('#', {reverse: true});" class="form-control" name="sku" required autocomplete="sku" autofocus value="<?php echo $produto['sku']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="preco" class="col-md-4 col-form-label text-md-right">Preço</label>
                            <div class="col-md-6">
                                <input id="preco" type="text" class="form-control" name="preco" onkeypress="$(this).mask('#,00', {reverse: true});" required autocomplete="preco" autofocus value="<?php echo str_replace(".",",",$produto['preco']); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantidade" class="col-md-4 col-form-label text-md-right">Quantidade</label>
                            <div class="col-md-6">
                                <input id="quantidade" type="text" class="form-control" name="quantidade" onkeypress="$(this).mask('#', {reverse: true});" required autocomplete="quantidade" autofocus value="<?php echo $produto['quantidade']; ?>">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                           <label for="categoria" class="col-md-4 col-form-label text-md-right">Categoria</label>
                           <div class="col-md-6">
                              <select multiple class="form-control" id="categoria" name="categoria[]" required>
                                <?php foreach ($categorias as $item){
                                    $selected = "";
                                    for($i=0;$i <= count($cat);$i++){
                                        if($item['id'] == @$cat[$i]){
                                            $selected = "selected";
                                        }
                                    }
                                    echo "<option value='".$item['id']."' $selected>".$item['nome']."</option>";
                                 }?>
                              </select>
                           </div>
                        </div>
                        
                        <div class="form-group row">
                           <label for="descricao" class="col-md-4 col-form-label text-md-right">Descrição</label>
                           <div class="col-md-6">
                              <textarea id="descricao" class="form-control" name="descricao" rows="4" required autocomplete="descricao" autofocus> <?php echo $produto['descricao']; ?></textarea>
                           </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<?php
include("includes/layout/main_footer.php");
?>