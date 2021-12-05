<?php
include_once("header.php");
?>
<div class="container3">
<div class="card">
<div class="card-body">
<form method="POST" action="../controller/inserirClientes.php">
    <p>Código do Usuário <input type="number" name="codUsuFK"></p>
    <p>Nome <input type="text" name="nomeCli"></p>
    <p>CPF <input type="text" name="cpfCli"></p>
    <p>Telefone <input type="text" name="foneCli"></p>
    <p>Data de Nascimento <input type="date" name="datanasCli"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
</div>
</div>
<?php
include_once("footer.php");
?>