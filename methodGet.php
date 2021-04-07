<!-- Utilisation de la methode Get -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Example of PHP GET method</title>
    </head>
    <body>

        <?php
            // Verifier si le nom existe et l'afficher
            if(isset($_GET["name"])){
                // Afficher le nom
                echo "<p>Salut, " . $_GET["name"] . "</p>";
            }
        ?>

        <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="inputName"> Name :</label>
            <input type="text" name="name" id="inputName">
            <input type="submit" value="submit">
        </form>
    </body>
</html>