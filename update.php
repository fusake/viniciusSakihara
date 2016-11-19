<?php

include "conecta.php";

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = sha1($_POST["senha"]);


$resultado = mysqli_query($conexao, "UPDATE login SET usuario='$usuario', senha='$senha' WHERE nome='$nome'") or die ("Nao foi possivel executar a SQL: ".mysqli_error($conexao));
    if($resultado == TRUE){
        echo "<br/> Usuario alterado com sucesso!";
    }else {
        echo "<br/>Erro na atualizaçao.";
    }

    mysqli_close($conexao);
?>