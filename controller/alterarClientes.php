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
if(alterarClientes($conexao,$codCli,$codUsuFK,$nomeCli,$cpfCli,$foneCli,$datanasCli)){
    echo("Cliente alterado com sucesso.");
}else{
    echo("Cliente não alterado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>