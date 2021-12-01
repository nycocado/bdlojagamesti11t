<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoPedidos.php");
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Código do Funcionario</th>
            <th scope="col">Código do Cliente</th>
            <th scope="col">Código do Jogo</th>
            <th scope="col">Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $pedidos = listaTudoPedidos($conexao);
        foreach($pedidos as $pedido):
        ?>
        <tr>
            <th scope="row"><?=$pedido['codPed']?></th>
            <td><?=$pedido['codFunFK']?></td>
            <td><?=$pedido['codCliFK']?></td>
            <td><?=$pedido['codJogFK']?></td>
            <td>
                <form action="../controller/deletarPedidos.php" method="POST">
                    <input type="hidden" name="codPedDeletar" value="<?=$pedido['codPed']?>">
                    <button type="submit" class="btn-small btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
    </table>
<?php
include_once("footer.php");
?>