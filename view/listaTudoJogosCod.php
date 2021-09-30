<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoJogos.php");
?>
<div class="container m-5 p-5">
<form action="" method="">
    <div class="row mb-3">
        <label for="inputCod" class="col-sm-2 col-form-label">Digite o Código do Jogo: </label>
        <div class="col-sm-3">
            <input type="number" class="form-control" id="inputCod" required>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-dark">Buscar</button>
        </div>
    </div>
</form>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Jogo</th>
            <th scope="col">Plataforma</th>
            <th scope="col">Preço</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $jogos = listaTudoJogos($conexao);
        foreach($jogos as $jogo):
        ?>
        <tr>
            <th scope="row"><?=$jogo['codJog']?></th>
            <td><?=$jogo['nomeJog']?></td>
            <td><?=$jogo['consoleJog']?></td>
            <td><?=$jogo['precoJog']?></td>
        </tr>
        <?php
        endforeach;
        ?>
        
    </tbody>
    </table>
<?php
include_once("footer.php");
?>