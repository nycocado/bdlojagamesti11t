<?php
include_once("header.php");
?>
<form method="POST" action="../controller/inserirFuncionarios.php">
    <p>Código do Usuário <input type="number" name="codUsuFK"></p>
    <p>Nome <input type="text" name="nomeFun"></p>
    <p>Função <input type="text" name="funcaoFun"></p>
    <p>Telefone <input type="text" name="foneFun"></p>
    <p>Data de Nascimento <input type="date" name="datanasFun"></p>
    <button type="submit">Salvar</button>
</form>
<?php
include_once("footer.php");
?>