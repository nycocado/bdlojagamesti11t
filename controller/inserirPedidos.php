<?php
include("../model/conexao.php");
include("../model/bancoJogos.php");
include("../view/header.php");
$codFunFK=$_SESSION['codFun'];
$codCliFK=$_SESSION['codCli'];
$codJogFK=$_SESSION['codJog'];
$totalJogoPed=$_SESSION['precoJog'];
?>
<style>
.container3 {
    margin: 0;
    background: yellow;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
}
</style>
<div class="container3">
<div class="card">
<div class="card-body">
<?php
extract($_REQUEST,EXTR_OVERWRITE);
var_dump($codFunFK);
if(inserirPedidos($conexao,$codCliFK,$codFunFK,$codJogFK,$totalJogoPed)){
    echo("Pedidos cadastrado com sucesso.");
}else{
    echo("Pedidos não cadastrado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>