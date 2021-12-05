<?php
include("../model/conexao.php");
include("../model/bancoUsuarios.php");
include("../view/header.php");
?>
<div class="container3">
<div class="card">
<div class="card-body">
<?php
extract($_REQUEST,EXTR_OVERWRITE);
if(deletarUsuarios($conexao,$codUsuDeletar)){
    echo("Usuário deletado com sucesso.");
}else{
    echo("Usuário não deletado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>