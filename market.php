<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vizuu</title>
        <link type="text/css" rel="stylesheet" href="CSS/css_market.css">
    </head>
    <body>
         <?php include "header.php"; ?>
        <section id="busca_contato">
            <div id="mensagem">
                <h1><strong> Find what you are looking for in a Photography.</strong></h1>
                <h4>  Here you will find prime and original images for brands and agencies.</h4>
            </div>

            <div id="busca">
                <article>
                    <form>
                        <input id="campo" type="search"/>
                        <input type="submit"  value="Search"/>
                    </form>
                </article>

                <div id="contato"> 
                    <p>Free Creative Services. You ask. We help.</p>
                    <a href="contact.html">
                        <figure id="email">
                            <img class="flutuaEsq" alt="email" src="Images/email.png">
                        </figure>
                        <p>contact@vizuu.com.br</p>
                    </a>
                </div>
            </div>
        </section>
        <section id="banners">
            <article>
                <h1><strong>If you are not convinced yet, let's look in another perspective.</strong></h1>
                <br>
                <figure id="first">
                    <img alt="photographer" src="Images/photographer.jpg" width="150" height="400">
                </figure>
                <figure>
                    <img alt="photographer2" src="Images/photographer2.jpg" width="150" height="400">
                </figure>
                <figure>
                    <img alt="photographer2" src="Images/photographer3.jpg" width="150" height="400">
                </figure>
            </article>
            <article>
                <p>Everyone wants to create it, and photography is one of the best ways to do it. </p>
            </article>
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
