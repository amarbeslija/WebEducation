<?php

#Temperature
$array = [8, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];

echo "Sve temperature u nizu:";
foreach($array as $clan){
    echo $clan . " ";
}
echo "<hr>";


$ukupniZbirTemperatura = 0;
for($i = 0; $i < count($array); $i++){
    $ukupniZbirTemperatura += $array[$i];
}

$ukupniBrojTemperatura = sizeof($array);

$prosjecnaTemperatura = $ukupniZbirTemperatura / $ukupniBrojTemperatura;
$prosjecnaTemperatura = round($prosjecnaTemperatura); //Zaokruživanje
echo "Prosječna temperatura: " . $prosjecnaTemperatura;
echo "<hr>";

echo "Prvih pet temperatura: ";
for($i = 0; $i < sizeof($array); $i++){
    if($i == 5){
        break;
    }else{
         echo $array[$i] . " ";   
    }
}
echo "<hr>";

echo "Posljednjih pet temperatura: ";
for($i = sizeof($array)-5; $i < sizeof($array); $i++){
     echo $array[$i] . " ";   
}
echo "<hr>";

//Funkcija round za zaokruživanje brojeva
?>