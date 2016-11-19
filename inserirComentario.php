<!DOCTYPE html>
<html>
    <head>
        
    </head>
<body>
    
<?php

include("conecta.php");

$nome=strip_tags($_POST['nome']);
$comentario=$_POST['comentario'];


$inserir=mysqli_query($conexao, "INSERT INTO comentarios(nome, comentario) VALUES('$nome', '$comentario')") or die ("Nao foi possivel exexutar a SQL: " .mysqli_error($conexao));


echo "<p>Obrigado Por comentar.<br/>";


mysqli_close($conexao);


?>
<form action="contact.php">
            <input type="submit" value="Voltar"/>
        </form>


</body>

</html>