<?php

#Matrix
$x = 15;
$y = 15;
$o = 0;
//Ispis jednog reda
for($i = 0; $i < $y; $i++){
    //Ispis svakog pojedinačnog karaktera unutar jednog reda
    for($j = 0; $j < $x; $j++){
        //Ispis X u kompletnom prvom i kompletnom zadnjem redu
        if($i == 0 || $i == $y-1){
            echo "X";    
        }else{
            //Ispis X na mjestu prvog i zadnjeg karaktera u ostalim redovima (osim prvog i zadnjeg)
            if($j == 0 || $j == $x-1){
                echo "X";
            }else{
                
                //Ispis O na mjestima između X-a, u svakom redu pomjeren za 1
                if($j == $o){
                   echo "O";
                   continue;
                //Ispis H na svim ostalim mjestima
                }else{
                    echo "H";
                }
            }
        }
            
    }
    $o = $o + 1;
    echo "<br>";
}
?>