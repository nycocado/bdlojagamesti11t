<?php
include("../model/conexao.php");
include("../model/bancoPedidos.php");
include("../view/header.php");
$codFunFK=$_SESSION['codFun'];
$codCliFK=$_SESSION['codCli'];
$codJogFK=$_SESSION['codJog'];
$totalJogoPed=$_SESSION['precoJog'];
?>
<div class="container3">
<div class="card">
<div class="card-body">
<?php
extract($_REQUEST,EXTR_OVERWRITE);
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