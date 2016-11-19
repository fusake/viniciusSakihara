<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vizuu</title>
        <link type="text/css" rel="stylesheet" href="CSS/css_contact.css">
    </head>

    <body>
         <?php include "header.php"; ?>
        <section id="nav_2">
            <article>
                <nav>
                    <h4>Date of Fundation</h4>
                    <p>26/02/2016</p>
                    <h4>Local</h4>
                    <p>São Paulo, Brazil</p>Ï
                </nav>
            </article>
        </section>
        <section id="about_us">
            <article>
                <h1>What is Vizuu</h1>
                <p>Vizuu is a place where you can begin and share your learning about photography. We believe that photography is one of the most beautiful arts that exists in this world.</p>

            </article>
            <article>
                <h1>About us</h1>
                <p>We was just like you, in the past, we didin't know how to shoot, we didin't know about aperture, rendering or angles. But together, you and we are gonna learn more about this features and more in the world of Vizuugraphy.</p>
            </article>
            <fieldset>
                <form method='POST' action="inserirComentario.php">
                    <h2>Deixe um comentario sobre o nosso site: </h2><br/>
                    Nome: <input type="text" name="nome"/><br/>
                    Comentario: <textarea name="comentario"></textarea><br/>
                    <input type="submit" name="Enviar"/>
                </form>
            </fieldset>
        </section>
        <section id="comentarios">
            <?php
                include("conecta.php");
                $comentario= mysqli_query($conexao, "SELECT * FROM comentarios");
                $row = mysqli_num_rows($comentario);
                
                if($row > 0){
                    while($linha = mysqli_fetch_array($comentario)){
                        $nome = $linha['nome'];
                        $comentario = $linha['comentario'];
                        echo "<fieldset>";
                        echo "Nome: " .$nome;
                        echo "<br/>";
                        echo "Comentario: " .$comentario;
                        echo "<br/><hr/>";
                        echo "</fielset>";
                    }
                    
                }else {
                    echo "Ainda não existem comentarios.";
                }
                
            ?>
        </section>
        
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
