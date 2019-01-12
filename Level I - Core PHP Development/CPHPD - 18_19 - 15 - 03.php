<?php

#Prikaz poruke korisniku 3
$currentTime = date("G");
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

$userMessage = "Good " . $timeMessage . ", nice ";

switch($userGender){
    case "m":
        $userMessage .= (($userAge < 18)?"boy ":"man ");
        break;
    case "f":
        $userMessage .= (($userAge < 18)?"girl ":"woman ");
        break;
    default:
        $userMessage .= "someone";
        break;
}

echo $userMessage . $userName . " and welcome to our site!";
echo "Your age is " . $userAge . "!";
echo "Current time is " . $currentTime . "h!";

// Problem sa datumom i vremenom zbog vremenske zone:
// C:\xampp\php\php.ini
// Potražiti string date.timezone
// Promijeniti ga u skladu sa vremenskim zonama na sljedećem linku:
// http://php.net/manual/en/timezones.php
// Restartovati XAMPP

?>