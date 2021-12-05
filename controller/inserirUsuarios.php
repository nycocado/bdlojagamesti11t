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
if(inserirUsuarios($conexao,$email,$senha,$pin)){
    echo("Usuário cadastrado com sucesso.");
}else{
    echo("Usuário não cadastrado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>