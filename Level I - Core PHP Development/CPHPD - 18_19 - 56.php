<?php

#Sortiranje niza
$nizB = array(2, 6, 9, 1321, 1, 4, 123, 346, 1234, 3, 9);

function sortirajNiz(&$arrayA, $direction){
    switch($direction){
        case "up":
            sort($arrayA);
            break;
        case "down":
            rsort($arrayA);
            break;
        default:
            sort($arrayA);
            break;
    }   
            
}

sortirajNiz($nizB, "down");
foreach($nizB as $value){
    echo $value . " ";    
}
?>