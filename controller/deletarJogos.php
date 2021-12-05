<?php
include("../model/conexao.php");
include("../model/bancoJogos.php");
include("../view/header.php");
?>
<div class="container3">
<div class="card">
<div class="card-body">
<?php
extract($_REQUEST,EXTR_OVERWRITE);
if(deletarJogos($conexao,$codJogDeletar)){
    echo("Jogo deletado com sucesso.");
}else{
    echo("Jogo não deletado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>