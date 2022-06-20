<!DOCTYPE html>
<!--
Afiche les éléments du formulaire
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Vous avez envoyé : </h1>
        <?php
            foreach($_REQUEST as $name=>$value) {
                echo"<p><b>$name</b>: $value</p>";
            }
        ?>
    </body>
</html>
