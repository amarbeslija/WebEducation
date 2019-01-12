<?php

#Funkcija za ispis Select tag-a
function ispisTaga($nameAtt, $idAtt, $optionArray, $selected, $style){
    #Ako select nije nula (ako programer ne zna šta radi) smanji broj za jedan zbog indeksiranja od nule
    if($selected !== 0)
        $selected = $selected - 1;
    
    #Ispiši prvo select, prije for petlje
    echo "<select name='" . $nameAtt . "' id='" . $idAtt . "' style='" . $style . "'>";
    #Iako koristimo foreach petlju, i dalje nam treba brojač da provjerimo koji je član niza selected
    $brojac = 0;
    #Ne bismo mogli bez ove petlje jer ne bismo mogli pristupiti ključevima niza koji predstavljaju value atribut u HTML-u
    foreach($optionArray as $key=>$option){
        #Provjera da li je selectovan ovaj član niza
        if($selected === $brojac)
            echo "<option selected='selected' value='" . $key . "'> $option </option>";
        else
            echo "<option value='" . $key . "'> $option </option>";
        $brojac++;
    }
    echo "</select>";
}

ispisTaga("godina", "id-godine", array("BruceWayne" => "Batman", "ClarkKent" => "Superman", "SelinaKyle" => "Catwoman"), 3, "nesto"); 
?>