<?php
session_start();
$email = isset($_SESSION["emailUsu"])?$_SESSION["emailUsu"]:null;
if($email != null){
    include("../view/header.php");
}
?>
<style>
.container3 {
    margin: 0;
    background: yellow;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
}
</style>
<div class="container3">
<div class="card">
<div class="card-body">
<form method="POST" action="../controller/inserirUsuarios.php">
    <p>Email <input type="email" name="email"></p>
    <p>Senha <input type="password" name="senha"></p>
    <p>PIN <input type="number" name="pin"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
</div>
</div>
<?php
if($email != null){
include_once("footer.php");
}
?>