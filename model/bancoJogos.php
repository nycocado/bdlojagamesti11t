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
        $resultados=mysqli_query($conexao,$codJogo);
        return $resultados;
    }
?>