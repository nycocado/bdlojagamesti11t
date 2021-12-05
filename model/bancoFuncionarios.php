<?php
    function inserirFuncionarios($conexao,$codUsuFK,$nomeFun,$funcaoFun,$foneFun,$datanasFun){
        $query="insert into tbfuncionarios(codUsuFK,nomeFun,funcaoFun,foneFun,datanasFun)values('{$codUsuFK}','{$nomeFun}','{$funcaoFun}','{$foneFun}','{$datanasFun}')";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaTudoFuncionarios($conexao){
        $query="Select * From tbfuncionarios";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaTudoFuncionariosCod($conexao,$codFun){
        $query="Select * from tbfuncionarios where codFun={$codFun}";
        $resultados=mysqli_query($conexao,$query);
        $resul=mysqli_fetch_array($resultados);
        return $resul;
    }
    function listaTudoFuncionariosNome($conexao,$nomeFun){
        $query="Select * from tbfuncionarios where nomeFun like '%{$nomeFun}%'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function alterarFuncionarios($conexao,$codFun,$codUsuFK,$nomeFun,$funcaoFun,$foneFun,$datanasFun){
        $query="update tbfuncionarios set codUsuFK='{$codUsuFK}', nomeFun='{$nomeFun}', funcaoFun='{$funcaoFun}', foneFun='{$foneFun}', datanasFun='{$datanasFun}' where codFun='{$codFun}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarFuncionarios($conexao,$codFun){
        $query="delete from tbfuncionarios where codFun=$codFun";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaBuscaFunUsu($conexao,$codUsuFK){
        $query="Select * from tbfuncionarios where codUsuFK like '{$codUsuFK}'";
        $resultados=mysqli_query($conexao,$query);
        $resul=mysqli_fetch_array($resultados);
        return $resul;
    }
?>