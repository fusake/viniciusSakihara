<?php

include "conecta.php";

$nome=$_POST["nome"];


$resultado = mysqli_query($conexao, "DELETE FROM login WHERE nome='$nome'") or die ("Nao foi possivel executar a SQL: ".mysqli_error($conexao));
if($resultado == TRUE){
    echo "<br/> Usuario Removido com Sucesso.";
}else{ 
    echo "<br/> Erro na remoçao.";
}

mysqli_close($conexao);

?>