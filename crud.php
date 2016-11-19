<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            body{
                background: black;
                color:white;
            }
        </style>
    </head>
    <body>
        
        <?php 

$opcao=$_POST["valorCrud"];
switch ($opcao) {
    case "C":
            $formulario = "<h3>CRIAR</h3>
                            <form action='check_formulario2.php' method='POST'>
                            <fieldset>
                            <label for=‘nome’>Nome Completo: </label><input type=‘text’ name=‘nome’ id=‘nome’ size=’20’/><br/>
                            <label for='cpf'>CPF:           </label><input type='text' name='cpf' id='cpf' size='11'/><br/>
                            E-mail:        <input type='email' name='email' id='email' size='20'/><br/>
                            Confirmar E-mail <input type='email' name='cemail' id='cemail' size='20'/><br/>
                            Sexo:          <input type='radio' value='masculino' checked name='sexo' id='masculino'><label for='masculino'>Masculino</label>
                            <input type='radio' checked name='sexo' value=˜feminino˜ id='feminino'><label for='feminino'>Feminino</label><br/>
                            <label for='datadenascimento'>Data de Nascimento: </label><input type='text' name='datadenascimento' id='datadenascimento'/><br/>
                            Estado:        <input type='text' name='estado' id='estado' size='10'/><br/>
                            Cidade:        <input type='text' name='cidade' id='cidade' size='10'/><br/>
                            <label for='usuario'>Usuario: </label><input type='text' name='usuario' id='usuario' size='10'/><br/>
                            <label for='senha'>Senha: </label><input type='password' name='senha' id='senha' size='10'/><br/>
                            <label for='csenha'>Confirmar Senha: </label><input type='password' name='csenha' id='csenha' size='10'/><br/>
                            <input type='submit' value='Enviar'/>
                            </fieldset>
                            </form>";
                            break;
    
    case "R":
        
        $formulario = "<h3>LER</h3>
                            <form action='read.php' method='POST'>
                            <fieldset>
                                <input type='submit' value='Enviar'/>
                                </fieldset>
                                </form>";
        break;
        
        case "U":
            $formulario = "<h3>Update</h3>
                            <form action='update.php' method='POST'>
                            <fieldset>
                                Nome: <input type='text' name='nome'/><br/>
                                Usuario: <input type='text' name='nome'/><br/>
                                Senha: <input type='password' name='nome'/><br/>
                                <input type='submit' value='Enviar'/>
                                </fieldset>
                                </form>";
                                
                                break;
                                
        case "D":
            
                $formulario = "<h3>Delete</h3>
                            <form action='delete.php' method='POST'>
                            <fieldset>
                                Nome: <input type='text' name='nome'/><br/>
                                <input type='submit' value='Enviar'/>
                                </fieldset>
                                </form>";
}

    echo $formulario;



?>
    </body>
</html>

