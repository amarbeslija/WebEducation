<?php

#Bingo
$broj = 13;
$broj1 = 0;
$broj2 = 0;
$broj3 = 0;
$broj4 = 0;
$broj5 = 0;
$izvuceni = 0;
for($i = 0; $i < 5; $i++){
    //Biramo broj od 1 do 25
    $izvuceni = rand(1,25);  
    //Mrtva petlja koja prvo provjerava poklapanje a zatim ispisuje brojeve na stranu kada poklapanja nema
    while(true){
        if($izvuceni == $broj1 || $izvuceni == $broj2 || $izvuceni == $broj3 || $izvuceni == $broj4 || $izvuceni == $broj5){
            $izvuceni = rand(1,25);
            continue;
        }else{
            if($izvuceni == $broj){
                echo "<span style='width:30px; display: inline-block; color: red;'>$izvuceni</span>";    
            }else{
                echo "<span style='width:30px; display: inline-block;'>$izvuceni</span>";  
            }
            break;        
        }
    }
    //Nakon provjere i ispisa onda čuvamo svaki izvučeni broj u posebnu varijablu (ovo radimo poslije zbog prve iteracije i moguće mrtve petlje
    switch($i){
        case 0:
            $broj1 = $izvuceni;
            break;
        case 1:
            $broj2 = $izvuceni;
            break;
        case 2:
            $broj3 = $izvuceni;
            break;
        case 3:
            $broj4 = $izvuceni;
            break;
        case 4:
            $broj5 = $izvuceni;
            break;
        default:
            $broj1 = $izvuceni;
            break;
    }
      
}
?>