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
if(inserirJogo($conexao,$jogo,$tamanho,$preco,$requisitos,$plataforma,$classificacao,$avaliacao)){
    echo("Jogo cadastrado com sucesso.");
}else{
    echo("Jogo não cadastrado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>