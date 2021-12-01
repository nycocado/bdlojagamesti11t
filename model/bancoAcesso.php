<?php
    function buscarAcesso($conexao,$email,$senha){
        $query="select * from tbusuarios where emailUsu='{$email}'";
        $resultados=mysqli_query($conexao,$query);
        if(mysqli_num_rows($resultados)>0){
            $linha=mysqli_fetch_assoc($resultados);
            if(password_verify($senha,$linha["senhaUsu"])){
                $_SESSION["emailUsu"]=$linha["emailUsu"];
                $_SESSION["codUsu"]=$linha["codUsu"];
                return $linha["emailUsu"];
            }else{
                return "Senha não confere";
            }
        }else{
            return "Email não cadastrado";
        }
    }
    function sairSistema(){
        session_destroy();
        $_SESSION["msg"]="<div class='alert alert-danger' role='alert'>Sessão Expirada</div>";
        header("Location:../view/logar.php");
    }
?>