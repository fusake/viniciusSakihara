<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vizuu</title>
        <link type="text/css" rel="stylesheet" href="CSS/css_cadastro2.css">
    </head>
    <body>
        <?php include "header.php"; ?>
        <div id="form_cadastro">
            <h1>Cadastre-se</h1>
            <form method="POST" enctype="multipart/form-data" action="check_formulario2.php">
            <fieldset>
             <legend>Etapa 2</legend>
             
             <!--informacoes passadas em hidden-->
                <input type="hidden" name="nome" value="<?php echo $nome; ?>"/>
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>"/>
                <input type="hidden" name="email" value="<?php echo $email; ?>"/>
                <input type="hidden" name="cemail" value="<?php echo $cemail; ?>"/>
                <input type="hidden" name="datadenascimento" value="<?php echo $datadenascimento; ?>"/>
                <input type="hidden" name="sexo" value="<?php echo $sexo; ?>"/>
                <input type="hidden" name="estado" value="<?php echo $estado; ?>"/>
                <input type="hidden" name="cidade" value="<?php echo $cidade; ?>"/>
                
            <!--usuario e senha-->
                <label for="usuario">Usuario: </label><input type="text" name="usuario" id="usuario" size="10"/><br/>
                <label for="senha">Senha: </label><input type="password" name="senha" id="senha" size="10"/><br/>
                <label for="csenha">Confirmar Senha: </label><input type="password" name="csenha" id="csenha" size="10"/><br/>
                <input type="submit" value="Finalizar Cadastro" name="fim"/>
            </fieldset>
        </form>
        </div>
        
        <article id="footer">
            <footer>
                <p> @Copyright 2016 - Developed by Vinicius Sakihara</p>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="community.html">Community</a></li>
                        <li><a href="market.html">Market</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </footer>
        </article>



    </body>
</html>
