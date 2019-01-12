<?php

#Matrica 1

 $niz = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );

for($i=0; $i<sizeof($niz); $i++){
    for($j=0; $j<sizeof($niz[$i]); $j++){
         echo $niz[$i][$j]; 
       
    }
      echo "<br><br>";
}
?>