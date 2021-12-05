<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoFuncionarios.php");
?>
</br>
<div class="container3">
<div class="card">
<div class="card-body">
<form method="POST" action="../controller/alterarFuncionarios.php">
<?php 
$codFun=$_POST['codFunAlterar'];
$funcionario=listaTudoFuncionariosCod($conexao,$codFun);
?>
    <p>Código <input type="number" name="codFun" value="<?=$funcionario['codFun']?>" readonly></p>
    <p>Código do Usuário <input type="number" name="codUsuFK" value="<?=$funcionario['codUsuFK']?>"></p>
    <p>Nome <input type="text" name="nomeFun" value="<?=$funcionario['nomeFun']?>"></p>
    <p>Função <input type="text" name="funcaoFun" value="<?=$funcionario['funcaoFun']?>"></p>
    <p>Telefone <input type="text" name="foneFun" value="<?=$funcionario['foneFun']?>"></p>
    <p>Data de Nascimento <input type="date" name="datanasFun" value="<?=$funcionario['datanasFun']?>"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
</div>
</div>
<?php
include_once("footer.php");
?>