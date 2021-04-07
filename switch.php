// Switch case
<?php
    $today = date("D");
    switch($today){
        case "Mon":
            echo "Lundi";
            break;
        case "Tue":
            echo "Mardi";
            break;
        case "Wed":
            echo "Mercredi";
        case "Thu":
            echo "TJeudi";
            break;
        case "Fri":
            echo "Vendredi";
            break;
        case "Sat":
            echo "Samedi";
            break;
        case "Sun":
            echo "Dimanche";
            break;
        default:
            echo "Info errone";
            break;
        
    }
?>