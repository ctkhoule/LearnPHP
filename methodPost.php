<!-- Utilisation de la methode Post -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Example of PHP POST method</title>
    </head>
    <body>

        <?php
            // Verifier si le nom existe et l'afficher
            if(isset($_POST["name"])){
                // Afficher le nom
                echo "<p>Salut, " . $_POST["name"] . "</p>";
            }
        ?>

        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="inputName"> Name :</label>
            <input type="text" name="name" id="inputName">
            <input type="submit" value="submit">
        </form>
    </body>
</html>