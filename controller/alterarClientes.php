<?php
include("../model/conexao.php");
include("../model/bancoJogos.php");
include("../view/header.php");
extract($_REQUEST,EXTR_OVERWRITE);
if(alterarClientes($conexao,$codCli,$codUsuFK,$nomeCli,$cpfCli,$foneCli,$datanasCli)){
    echo("Cliente alterado com sucesso.");
}else{
    echo("Cliente não alterado.");
}
include("../view/footer.php");
?>