<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
        include "conecta.php";
        
        
            $nome=strip_tags($_POST["nome"]);
            $cpf=strip_tags($_POST["cpf"]);
            $email=$_POST['email'];
            $cemail=$_POST['cemail'];
            $datadenascimento=strip_tags($_POST["datadenascimento"]);
            $sexo=strip_tags($_POST["sexo"]);
            $estado=strip_tags($_POST["estado"]);
            $cidade=strip_tags($_POST["cidade"]);
            $usuario=strip_tags($_POST["usuario"]);
            $senha=sha1(strip_tags($_POST["senha"]));
            $csenha=sha1(strip_tags($_POST["csenha"]));
            
            $erro = 0;
            
                if (empty($usuario) || strlen($usuario) < 4) {
                    // code...
                    echo "Preencha o usuario corretamente. <br/>";
                    $erro=1;
                }
                
                if (empty($senha) || strlen($senha) < 5) {
                    // code...
                    echo "A senha deve conter pelo menos cinco caracteres. <br/>";
                    $erro=1;
                }
                
                if ($senha != $csenha) {
                    // code...
                    echo "A senha não bate. <br/>";
                    $erro=1;
                }
                
                
               
                    /* code...
                    echo "Nome: ".$nome. "<br/>";
                    echo "CPF:  ".$cpf. "<br/>";
                    echo "E-mail: ".$email. "<br/>";
                    echo "Data de Nascimento: ".$datadenascimento. "<br/>";
                    echo "Sexo: ".$sexo. "<br/>";
                    echo "Estado: ".$estado. "<br/>";
                    echo "Cidade: ".$cidade. "<br/>";
                    echo "Usuario: ".$usuario. "<br/>";
                    echo "Senha: ".$senha. "<br/>";
                    
                    
                    echo "Cadastro feito com sucesso.";*/
                    
                    //Conecta ao Banco de Dados
                   
                    
                    //Executando a operacao de SQL
                    $resultado = mysqli_query($conexao, "INSERT INTO login(nome, cpf, email, datadenascimento, sexo, estado, cidade, usuario, senha) VALUES('".$nome."',".$cpf.",'".$email."','".$datadenascimento."','".$sexo."','".$estado."','".$cidade."','".$usuario."','".$senha."')") or die ("Não foi possivel executar a SQL:".mysqli_error($conexao));
                    
                    echo "<br/>Cadastro feito com sucesso.";
                    
                    //fechamento da conexao
                    mysqli_close($conexao);
                    
        
        ?>
        <form action="index.php">
            <input type="submit" value="Voltar"/>
        </form>
    </body>
</html>