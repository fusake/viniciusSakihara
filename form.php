<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            body{
                background: black;
                margin:auto;
                color:white;
            }
        </style>
        <body>
                <form action="crud.php" method="post">
                    <input type="radio" name="valorCrud" value="C" checked/>Create<br/>
                    <input type="radio" name="valorCrud" value="R"/>Read<br/>
                    <input type="radio" name="valorCrud" value="U"/>Update<br/>
                    <input type="radio" name="valorCrud" value="D"/>Delete<br/>
                    <input type="submit" name="START"/>
                </form>
        </body>
    </head>
</html>