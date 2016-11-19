<!DOCTYPE html>
<html>
    <head>
        
        <link type="text/css" rel="stylesheet" href="CSS/css_cadastro2.css">
    </head>
</html>





<?php

$nome=strip_tags($_POST["nome"]);
$cpf=strip_tags($_POST["cpf"]);
$email=($_POST["email"]);
$cemail=($_POST["cemail"]);
$datadenascimento=strip_tags($_POST["datadenascimento"]);
$sexo=strip_tags($_POST["sexo"]);
$estado=strip_tags($_POST["estado"]);
$cidade=strip_tags($_POST["cidade"]);

$erro = 0;

    if (empty($nome) || strstr($nome, ' ')==FALSE){
        // code...
        echo "Voce deve preencher o nome corretamente.<br>";
        $erro=1;
    }
    
    if (empty($cpf)){
        // code...
        echo "Voce  deve preencher o cpf corretamente.<br>";
        $erro=1;
    }
    
    if (strlen($email) < 3 || strstr($email, '@')== FALSE){
        // code...
        echo "Voce deve preencher o e-mail corretamente.<br>";
        $erro=1;
    }

    if (strlen($email) < 3 || strstr($email, '@')== FALSE) {
        // code...
        echo "Voce deve preencher a confirmacao de email corretamente. <br>";
        $erro=1;
    }
    
    if ($email != $cemail)  {
        // code...
        echo "O email não é o mesmo. <br>";
        $erro=1;
    }
    
    if (empty($estado)) {
        // code...
        echo "Voce deve preencher o  estado corretamente. <br>";
        $erro=1;
    }
    
    if (empty($cidade) || strstr($cidade, ' ')== FALSE) {
        // code...
        echo "Voce deve preencher a cidade corretamente. <br>";
        $erro=1;
    }
    
    if ($erro==0) {
        include 'cadastro2.php';
    }
?>
