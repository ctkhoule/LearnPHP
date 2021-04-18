<?php
// Fonction reference - 
// Permettre a la fonction de modifier ses arguments
    function reference(&$var){
        $var *= $var;
        return $var;
    }

    $var = 5;
    echo $var .'<br/>';

    reference($var);
    echo $var;
?>