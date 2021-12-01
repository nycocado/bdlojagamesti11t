<?php
    function inserirUsuarios($conexao,$email,$senha,$pin){
        $option=['cost'=>8];
        $senhacryto= password_hash($senha,PASSWORD_BCRYPT,$option);
        $query="insert into tbusuarios(emailUsu,senhaUsu,pinUsu)values('{$email}','{$senhacryto}','{$pin}')";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaTudoUsuarios($conexao){
        $query="Select * From tbusuarios";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaTudoUsuariosCod($conexao,$codUsu){
        $query="Select * from tbusuarios where codUsu={$codUsu}";
        $resultados=mysqli_query($conexao,$query);
        $resul=mysqli_fetch_array($resultados);
        return $resul;
    }
    function alterarUsuarios($conexao,$emailUsu,$senhaUsu,$pinUsu){
        $option=['cost'=>8];
        $senhacryto= password_hash($senhaUsu,PASSWORD_BCRYPT,$option);
        $query="update tbusuarios set emailUsu='{$emailUsu}', senhaUsu='{$senhacryto}' where pinUsu='{$pinUsu}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarUsuarios($conexao,$codUsu){
        $query="delete from tbusuarios where codUsu=$codUsu";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    
?>