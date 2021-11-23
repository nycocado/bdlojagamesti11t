<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoJogos.php");
$codUsuFK= $_SESSION["codUsu"];
$funcionario=listaBuscaFunUsu($conexao,$codUsuFK);
?>
<div class="row g-3">
  <div class="col-md-2">
    <label for="inputcodFun" class="form-label">Código</label>
    <input type="text" readonly value="<?=$funcionario['codFun']?>" class="form-control" id="inputcodFun">
  </div>
  <div class="col-md-10">
    <label for="inputnomeFun" class="form-label">Funcionario</label>
    <input type="text" name="nomeFun" readonly value="<?=$funcionario['nomeFun']?>" class="form-control" id="inputnomeFun">
  </div>
  <?php
  $codCli= isset($_POST["codCli"])?$_POST["codCli"]:0;
  ?>
  <div class="col-2">
    <label for="inputcodCli" class="form-label">Código</label>
    <form method="post" action="cadastroPedidos.php">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input type="text" value="<?=$codCli?>" name="codCli" required class="form-control" id="inputcodCli">
    <button class="btn btn-dark me-md-2" type="submit">Pesquisar</button>
  </div>
  </form>
  </div>
  <?php
$clientes= isset($codCli)?listaTudoClientesCod($conexao,$codCli):"";
$_SESSION["codCli"]=isset($_POST["codCli"])?$_POST["codCli"]:0;
?>
  <div class="col-10">
    <label for="inputnomeCli" class="form-label">Cliente</label>
    <input type="text" name="nomeCli" required value="<?=$clientes['nomeCli']?>" class="form-control" id="inputnomeCli" >
  </div>
  <div class="col-md-2">
    <label for="inputcodJog" class="form-label">Código</label>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input type="text" name="codJog" class="form-control" id="inputcodJog">
    <button class="btn btn-dark me-md-2" type="button">Pesquisar</button>
  </div>
  </div>
  <div class="col-md-10">
    <label for="inputnomeJog" class="form-label">Jogo</label>
    <input type="text" name="nomeJog" class="form-control" id="inputnomeJog">
  </div>
  <div class="col-md-2">
    <label for="inputState" class="form-label">Quantidade</label>
    <select id="inputState" class="form-select">
      <option selected>Selecione</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputvalorJog" class="form-label">Valor Unitario</label>
    <input type="text" name="precoJog" class="form-control" id="inputvalorJog">
  </div>
  <div class="col-md-2">
    <label for="inputtotalped" class="form-label">Total</label>
    <input type="text" name="totalped" class="form-control" id="inputtotalped">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-dark">Finalizar</button>
  </div>
</div>
<?php
include_once("footer.php");
?>