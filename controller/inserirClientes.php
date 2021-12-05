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
if(inserirClientes($conexao,$codUsuFK,$nomeCli,$cpfCli,$foneCli,$datanasCli)){
    echo("Cliente cadastrado com sucesso.");
}else{
    echo("Cliente não cadastrado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>