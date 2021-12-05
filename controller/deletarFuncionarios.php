<?php
include("../model/conexao.php");
include("../model/bancoFuncionarios.php");
include("../view/header.php");
?>
<div class="container3">
<div class="card">
<div class="card-body">
<?php
extract($_REQUEST,EXTR_OVERWRITE);
if(deletarFuncionarios($conexao,$codFunDeletar)){
    echo("Funcionário deletado com sucesso.");
}else{
    echo("Funcionário não deletado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>