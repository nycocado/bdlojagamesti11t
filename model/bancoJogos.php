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
    function listaTudoJogosCod($conexao,$codJog){
        $query="Select * from tbjogos where codJog={$codJog}";
        $resultados=mysqli_query($conexao,$query);
        $resul=mysqli_fetch_array($resultados);
        return $resul;
    }
    function alterarJogos($conexao,$nomeJog,$tamanhoJog,$precoJog,$requisitosJog,$consoleJog,$classificacaoJog,$avaliacaoJog){
        $query="update tbjogos set nomeJog='{$nomeJog}', tamanhoJog='{$tamanhoJog}', precoJog='{$precoJog}', requisitosJog='{$requisitosJog}', consoleJog='{$consoleJog}', classificacaoJog='{$classificacaoJog}' where avaliacaoJog='{$avaliacaoJog}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarJogos($conexao,$codJog){
        $query="delete from tbjogos where codJog=$codJog";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
?>
    
    