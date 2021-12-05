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
if(alterarJogos($conexao,$codJog,$nomeJog,$tamanhoJog,$precoJog,$requisitosJog,$consoleJog,$classificacaoJog,$avaliacaoJog)){
    echo("Jogo alterado com sucesso.");
}else{
    echo("Jogo não alterado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>