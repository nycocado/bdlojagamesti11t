<?php
include("../model/conexao.php");
include("../model/bancoJogos.php");
include("../view/header.php");
extract($_REQUEST,EXTR_OVERWRITE);
if(inserirUsuarios($conexao,$email,$senha,$pin)){
    echo("Usuário cadastrado com sucesso.");
}else{
    echo("Usuário não cadastrado.");
}
include("../view/footer.php");
?>