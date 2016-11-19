<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vizuu</title>
        <link type="text/css" rel="stylesheet" href="CSS/css_cadastro.css">
    </head>
    <body>
        <?php include "header.php"; ?>
        <div id="form_cadastro">
            <h1>Cadastre-se</h1>
            <form method="POST" enctype="multipart/form-data" action="check_formulario1.php">
            <fieldset>
            <label for="nome">Nome Completo: </label><input type="text" name="nome" id="nome" size="20"/><br/>
            <label for="cpf">CPF:           </label><input type="text" name="cpf" id="cpf" size="11"/><br/>
            E-mail:        <input type="email" name="email" id="email" size="20"/><br/>
            Confirmar E-mail <input type="email" name="cemail" id="cemail" size="20"/><br/>
            Sexo:          <input type="radio" value="masculino" checked name="sexo" id="masculino"><label for="masculino">Masculino</label>
                           <input type="radio" checked name="sexo" value=˜feminino˜ id="feminino"><label for="feminino">Feminino</label><br/>
            <label for="datadenascimento">Data de Nascimento: </label><input type="text" name="datadenascimento" id="datadenascimento"/><br/>
            Estado:        <input type="text" name="estado" id="estado" size="10"/><br/>
            Cidade:        <input type="text" name="cidade" id="cidade" size="10"/><br/>
            <input type="submit" value="Proximo"/>
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
