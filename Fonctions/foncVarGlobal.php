<?php
// Variable global dans une fonction
    $greet = "Hello world";
    // Definition de la fonction
    function test(){
        global $greet;
        echo $greet;
    }
    
    test();
    echo $greet;

    // Nouvelle valeur
    $greet = "Goodbye";
    echo $greet;
?>