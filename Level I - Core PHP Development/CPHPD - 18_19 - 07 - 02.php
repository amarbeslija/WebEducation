<?php

#Godine korisnika u mjesecima, danima, minutama, sekundama

$date1 = new DateTime("1994-03-13");
$date2 = new DateTime();
$interval = $date1->diff($date2);
echo "difference " . $interval->y . " years, " 
    . $interval->m ." months, " 
    . $interval->d." days, " 
    . $interval->h . " hours, " 
    . $interval->i . " minutes, "
    . $interval->s . " seconds!"
    . "<br><br>"; 

// Prikazuje ukupni broj dana (bez ove velike podjele iznad).
echo "Difference " . $interval->days . " days ";


# Cilj ove vježbe je bio pokazati kako se kompleksne stvari u PHP-u
# mogu jednostavno uraditi koristeći veliki broj ugrađenih funkcija.
# U ovom slučaju objekat DateTime i njegova funkcija (metoda) diff() nam
# daje uvid u razliku između dva datuma i to u nama željenom formatu (dani, mjeseci, godine, sati, minute, sekunde, i slično).


?>