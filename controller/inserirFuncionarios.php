<?php
include("../model/conexao.php");
include("../model/bancoJogos.php");
include("../view/header.php");
extract($_REQUEST,EXTR_OVERWRITE);
if(inserirFuncionarios($conexao,$codUsuFK,$nomeFun,$funcaoFun,$foneFun,$datanasFun)){
    echo("Funcionário cadastrado com sucesso.");
}else{
    echo("Funcionário não cadastrado.");
}
include("../view/footer.php");
?>