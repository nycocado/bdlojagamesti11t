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
if(inserirFuncionarios($conexao,$codUsuFK,$nomeFun,$funcaoFun,$foneFun,$datanasFun)){
    echo("Funcionário cadastrado com sucesso.");
}else{
    echo("Funcionário não cadastrado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>