<?php

include("conecta.php");

$resultado = mysqli_query($conexao, "SELECT * from login") or die ("Nao foi possivel retornar a SQL: ".mysqli_error($conexao));
if ($resultado) {
    while($row = mysqli_fetch_array($resultado)){
        echo "Nome: ".$row["nome"]." - "."CPF: ".$row["cpf"]." - ". "Email: ".$row["email"]." - ". "Sexo: ".$row["sexo"]. " - ". "Usuario: " .$row["usuario"]. " - ". "Senha: ".$row["senha"]. "<br/>";
    }
}

mysqli_close($conexao);
?>