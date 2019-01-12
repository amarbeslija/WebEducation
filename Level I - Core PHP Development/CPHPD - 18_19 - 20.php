<?php

#Pređeni put
$startValue = 10;
$endValue = 160;
$trip = 150;

$completeTrip = $endValue - $startValue;
if($trip > $completeTrip){
    $tripValue = $trip - $completeTrip;
    echo "You passed " . $tripValue . " more than needed!";
}else if($trip < $completeTrip){
    $tripValue = $completeTrip - $trip;
    echo "You need to go " . $tripValue . " more!";
}else{
    echo "You passed exact distance, or " . $completeTrip . "!";
}

?>