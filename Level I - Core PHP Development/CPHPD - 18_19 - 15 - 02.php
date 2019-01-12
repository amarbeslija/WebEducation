<?php

#Prikaz poruke korisniku 2
$currentTime = date("h");
$userAge = 25;
$userName = "John";
$userGender = "m";
$timeMessage = "";
$userMessage = "";

if($currentTime > 0 && $currentTime < 12){
    $timeMessage = "morning";
}else if($currentTime >= 12 && $currentTime < 18){
    $timeMessage = "day";
}else{
    $timeMessage = "evening";
}

echo $timeMessage;
?>