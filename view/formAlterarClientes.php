<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoClientes.php");
include_once("../model/bancoUsuarios.php");
?>
</br>
<div class="container3">
<div class="card">
<div class="card-body">
<form method="POST" action="../controller/alterarClientes.php">
<?php 
$codCli=$_POST['codCliAlterar'];
$cliente=listaTudoClientesCod($conexao,$codCli);
$codUsu=$cliente['codUsuFK'];
$usuario=listaClienteUsuario($conexao,$codUsu);
?>
    <p>Código <input type="number" name="codCli" value="<?=$cliente['codCli']?>" readonly></p>
    <p>Código do Usuário <input type="number" name="codUsuFK" value="<?=$cliente['codUsuFK']?>"></p>
    <p>Email <input type= "email" name="emailUsu" value="<?=$usuario['emailUsu']?>"></p>
    <p>Nome <input type="text" name="nomeCli" value="<?=$cliente['nomeCli']?>"></p>
    <p>CPF <input type="text" name="cpfCli" value="<?=$cliente['cpfCli']?>"></p>
    <p>Telefone <input type="text" name="foneCli" value="<?=$cliente['foneCli']?>"></p>
    <p>Data de Nascimento <input type="date" name="datanasCli" value="<?=$cliente['datanasCli']?>"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
</div>
</div>
<?php
include_once("footer.php");
?>