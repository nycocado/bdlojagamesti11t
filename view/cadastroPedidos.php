<?php
session_start();
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoJogos.php");
$codUsuFK= $_SESSION["codUsu"];
$funcionario=listaBuscaFunUsu($conexao,$codUsuFK);
$codCli= isset($_POST["codCli"])?$_POST["codCli"]:0;
$clientes=isset($codCli)?listaTudoClientesCod($conexao,$codCli):"";
$_SESSION["codCli"]=isset($_POST["codCli"])?$_POST["codCli"]:0;
$_SESSION["nomeCli"]=isset($clientes["nomeCli"])?$clientes["nomeCli"]:"";
$codJog= isset($_POST["codJog"])?$_POST["codJog"]:0;
$jogos=isset($codJog)?listaTudoJogosCod($conexao,$codJog):"";
$_SESSION["codJog"]=isset($_POST["codJog"])?$_POST["codJog"]:0;
$_SESSION["nomeJog"]=isset($jogos["nomeJog"])?$jogos["nomeJog"]:"";
$_SESSION["precoJog"]=isset($jogos["precoJog"])?$jogos["precoJog"]:"";
$_SESSION["codFun"]=$funcionario['codFun'];
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
  <div class="col-2">
    <label for="inputcodCli" class="form-label">Código</label>
    <form method="post" action="cadastroPedidos.php">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input type="text" value="<?php echo($_SESSION['codCli']);?>" name="codCli" required class="form-control" id="inputcodCli">
    <input type="hidden" value="<?=$_SESSION['codJog']?>" name="codJog">
    <input type="hidden" value="<?=$_SESSION['nomeJog']?>" name="nomeJog">
    <input type="hidden" value="<?=$_SESSION['codFun']?>" name="codFun">
    <button class="btn btn-dark me-md-2" type="submit">Pesquisar</button>
  </div>
  </form>
  </div>
  <div class="col-10">
    <label for="inputnomeCli" class="form-label">Cliente</label>
    <input type="text" name="nomeCli" readonly value="<?php echo($_SESSION['nomeCli']);?>" class="form-control" id="inputnomeCli" >
  </div>
  <div class="col-md-2">
    <label for="inputcodJog" class="form-label">Código</label>
    <form method="post" action="cadastroPedidos.php">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input type="text" value="<?php echo($_SESSION['codJog']);?>" name="codJog" class="form-control" id="inputcodJog">
    <input type="hidden" value="<?=$_SESSION['codCli']?>" name="codCli">
    <input type="hidden" value="<?=$_SESSION['nomeCli']?>" name="nomeCli">
    <input type="hidden" value="<?=$_SESSION['codFun']?>" name="codFun">
    <button class="btn btn-dark me-md-2" type="submit">Pesquisar</button>
  </div>
  </form>
  </div>
  <div class="col-md-10">
    <label for="inputnomeJog" class="form-label">Jogo</label>
    <input type="text" name="nomeJog" readonly value="<?php echo($_SESSION['nomeJog']);?>" class="form-control" id="inputnomeJog">
  </div>
  <div class="col-md-2">
    <label for="inputtotalped" class="form-label">Preço</label>
    <input type="text" name="totalped" value="<?php echo($_SESSION['precoJog']);?>" class="form-control" id="inputtotalped">
  </div>
  <form method="POST" action="../controller/inserirPedidos.php">
  <div class="col-12">
    <button type="submit" class="btn btn-dark">Finalizar</button>
  </div>
</div>
<?php
include_once("footer.php");
?>