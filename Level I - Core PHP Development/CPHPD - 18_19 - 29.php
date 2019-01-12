<?php

#Odabir datuma
$dana = 31;
$datum = date("d");
for($i=1; $i<=31;$i++){
    if($i==$datum){
        $trenutni = "background-color:red; color: white;";
    }else{
        $trenutni = "";
    }
    if($i%7==0){
        echo "<span style='width:30px; display:inline-block;" . $trenutni . "'>$i</span>";
        echo "<br>";
    }else{
    echo "<span style='width:30px; display:inline-block;" . $trenutni . "'>$i</span>";
    }
}
?>