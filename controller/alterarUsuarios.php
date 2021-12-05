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
if(alterarUsuarios($conexao,$codUsu,$emailUsu,$senhaUsu,$pinUsu)){
    echo("Usuário alterado com sucesso.");
}else{
    echo("Usuário não alterado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>