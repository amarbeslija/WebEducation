<?php

#Grafikon

//Kreiranje 6 random brojeva od 1 do 100
$a1 = mt_rand(1, 100);
$a2 = mt_rand(1, 100);
$a3 = mt_rand(1, 100);
$a4 = mt_rand(1, 100);
$a5 = mt_rand(1, 100);
$a6 = mt_rand(1, 100);

//Kreiranje prvih 6 mjeseci
$b1 = "Januar";
$b2 = "Februar";
$b3 = "Mart";
$b4 = "April";
$b5 = "Maj";
$b6 = "Juni";

//Kreiranje varijabli u koje ćemo smještati trenutni broj i mjesec unutar petlje
$iteracija = 0;
$mjesec = 0;
for($i = 0; $i < 6; $i++){
    //Provjera koja je iteracija u pitanju i na osnovu toga dodjela mjeseca i random broja za narednu petlju
    switch($i){
        case 0:
            $iteracija = $a1;
            $mjesec = $b1;
            break;
        case 1:
            $iteracija = $a2;
            $mjesec = $b2;
            break;
        case 2:
            $iteracija = $a3;
            $mjesec = $b3;
            break;
        case 3:
            $iteracija = $a4;
            $mjesec = $b4;
            break;
        case 4:
            $iteracija = $a5;
            $mjesec = $b5;
            break;
        case 5:
            $iteracija = $a6;
            $mjesec = $b6;
            break;
        default:
            $iteracija = $a1;
            $mjesec = $b1;
            break;
    }
    echo $mjesec . " ";

    //Petlja koja ispisuje navedeni broj puta - $iteracija kvadratiće u različitim bojama, zavisno od uslova, a za svaki mjesec 
    for($j = 0; $j < $iteracija; $j++){
        if($iteracija < 50){
            echo "<span style='background-color: red; width: 8px; height: 8px; margin-right: 3px; display: inline-block;'></span>";
        }else if($iteracija >= 50 && $iteracija < 90){
            echo "<span style='background-color: orange; width: 8px; height: 8px;  margin-right: 3px; display: inline-block;'></span>";
        }else{
            echo "<span style='background-color: green; width: 8px; height: 8px; margin-right: 3px; display: inline-block;'></span>";
        }

    }

    
    echo "<br>";
}
?>