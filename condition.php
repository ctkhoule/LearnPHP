// Condition
<?php
    if($age < 18){
        echo 'Enfant';
    }
    else{
        echo 'Adulte';
    }
?>
// Ternaire
/*
    En utilisant l'operateur ternaire, le meme code pourrait entre 
    ecrit de la meme maniere
*/
<?php echo ($age < 18) ? 'Enfant' : 'Adulte'; ?>