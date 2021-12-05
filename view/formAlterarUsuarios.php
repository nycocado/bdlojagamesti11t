<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoUsuarios.php");
?>
</br>
<div class="container3">
<div class="card">
<div class="card-body">
<form method="POST" action="../controller/alterarUsuarios.php">
<?php 
$codUsu=$_POST['codUsuAlterar'];
$usuario=listaTudoUsuariosCod($conexao,$codUsu);
?>
    <p>Código <input type="text" name="codUsu" value="<?=$usuario['codUsu']?>" readonly></p>
    <p>Email <input type="email" name="emailUsu" value="<?=$usuario['emailUsu']?>"></p>
    <p>Senha <input type="password" name="senhaUsu" value="<?=$usuario['senhaUsu']?>"></p>
    <p>PIN <input type="number" name="pinUsu" value="<?=$usuario['pinUsu']?>"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
</div>
</div>
<?php
include_once("footer.php");
?>