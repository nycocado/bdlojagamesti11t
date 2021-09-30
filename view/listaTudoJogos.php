<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoJogos.php");
?>
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