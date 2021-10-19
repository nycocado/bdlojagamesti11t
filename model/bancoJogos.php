<?php 
    function inserirJogo($conexao,$jogo,$tamanho,$preco,$requisitos,$plataforma,$classificacao,$avaliacao){
        $query="insert into tbjogos(nomeJog,tamanhoJog,precoJog,requisitosJog,consoleJog,classificacaoJog,avaliacaoJog)values('{$jogo}','{$tamanho}','{$preco}','{$requisitos}','{$plataforma}','{$classificacao}','{$avaliacao}')";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaTudoJogos($conexao){
        $query="Select * From tbjogos";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaTudoJogosCod($conexao,$codJogo){
        $query="Select * from tbjogos where codJog={$codJogo}";
        $resultados=mysqli_query($conexao,$query);
        $resul=mysqli_fetch_array($resultados);
        return $resul;
    }
    function alterarJogos($conexao,$codJog,$nomeJog,$tamanhoJog,$precoJog,$requisitosJog,$consoleJog,$classificacaoJog,$avaliacaoJog){
        $query="update tbjogos set nomeJog='{$nomeJog}', tamanhoJog='{$tamanhoJog}', precoJog='{$precoJog}', requisitosJog='{$requisitosJog}', consoleJog='{$consoleJog}', classificacaoJog='{$classificacaoJog}', avaliacaoJog='{$avaliacaoJog}' where codJog = '{$codJog}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarJogos($conexao,$codJog){
        $query="delete from tbjogos where codJog=$codJog";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
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
    function alterarUsuarios($conexao,$codUsu,$emailUsu,$senhaUsu,$pinUsu){
        $query="update tbusuarios set emailUsu='{$emailUsu}', senhaUsu='{$senhaUsu}', pinUsu='{$pinUsu}' where codUsu = '{$codUsu}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarUsuarios($conexao,$codUsu){
        $query="delete from tbusuarios where codUsu=$codUsu";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
?>