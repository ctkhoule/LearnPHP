<!--
PHP fournit une autre variable superglobale $_REQUEST qui contient les valeurs 
des variables $_GETet $_POST ainsi que les valeurs de la $_COOKIE variable superglobale
-->
<!DOCTYPE html>
<html>
    <head>
        <title>EXample of PHP $_REQUEST variable</title>
    </head>
    <body>
        <?php
            if(isset($_REQUEST["name"])){
                echo "<p>Salut, " . $_REQUEST["name"] . "</p>";
            }
        ?>
         <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="inputName"> Name :</label>
            <input type="text" name="name" id="inputName">
            <input type="submit" value="submit">
        </form>
    </body>
</html>
