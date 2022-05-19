<?php
include("includes/layout/main_header.php");
include("includes/conexao.php");
$PDO = conectar();
$id = $_GET['id'];

$sql = "SELECT id, nome FROM categorias WHERE id = ".$id;
$result = $PDO->query( $sql );
$categoria = $result->fetch(PDO::FETCH_ASSOC);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Categoria</div>

                <div class="card-body">
                    <form id="myForm" method="POST" action="includes/actions/salvar_categoria.php" enctype="multipart/form-data">
                    <input id="action" type="hidden" name="action" value="edit">
                    <input id="get_id" type="hidden" name="get_id" value="<?php echo $categoria['id']; ?>">
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" required autocomplete="Nome" autofocus value="<?php echo $categoria['nome']; ?>">
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