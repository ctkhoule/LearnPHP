<?php
if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
{

    // Foercer la conversion en entier
    $_GET['repeter'] = (int) $_GET['repeter'];

    // Affichage
    for($i=0; $i < $_GET['repeter']; $i++)
    {
        echo 'Bomjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' <br/>';
    }
}
else
{
    echo 'Il faut renseigner un prenom, un nom et un nombre de repetion';
}
?>