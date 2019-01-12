<?php

#Vremenska prognoza
$currentTemperature = mt_rand(0,45);
$rain = mt_rand(0,1) == 1;

echo "<h1>Vremenska prognoza</h1>";

if($currentTemperature > 25){
    if($rain){
        echo "Temperature will be: " . $currentTemperature;
        echo "<br>";
        echo "It is going to rain, please take the umbrella with you and wear a rain shoes.";
        echo "<br>";
        echo "You can wear just a T-shirt because it is not going to be cold.";
    }else{
        echo "Temperature will be: " . $currentTemperature;
        echo "<br>";
        echo "You can wear a T-shirt and shorts because it is not going to be cold.";
    }
}else{
    if($rain){
        echo "Temperature will be: " . $currentTemperature;
        echo "<br>";
        echo "It is going to rain, please take the umbrella with you and wear a boots.";
        echo "<br>";
        echo "You have to wear a jacket because it is going to be cold.";    
    }else{
        echo "Temperature will be: " . $currentTemperature;
        echo "<br>";
        echo "You have to wear a jacket and trousers because it is going to be cold.";    
    }
}

//Nakon što se nauči dovoljno HTML za ubacivanje i formatiranje slika, prikazati i slike, bez detaljnih opisa kao ovdje

?>