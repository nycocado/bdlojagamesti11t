<?php
include("../model/conexao.php");
include("../model/bancoClientes.php");
include("../view/header.php");
?>
<div class="container3">
<div class="card">
<div class="card-body">
<?php
extract($_REQUEST,EXTR_OVERWRITE);
if(deletarClientes($conexao,$codCliDeletar)){
    echo("Cliente deletado com sucesso.");
}else{
    echo("Cliente não deletado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>