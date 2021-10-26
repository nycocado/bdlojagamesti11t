<?php
include_once("header.php");
?>
<form method="POST" action="../controller/inserirClientes.php">
    <p>Código do Usuario<input type="text" name="codUsuFK"></p>
    <p>Nome<input type="text" name="nomeCli"></p>
    <p>CPF<input type="text" name="cpfCli"></p>
    <p>Telefone<input type="text" name="foneCli"></p>
    <p>Data de Nascimento<input type="date" name="datanasCli"></p>
    <button type="submit">Salvar</button>
</form>
<?php
include_once("footer.php");
?>