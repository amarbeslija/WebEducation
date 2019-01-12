<?php

#Star Wars

$arr = array(
    "Anakin", "Luke", "Leia", "Obi-wan" ,"Bobba","Palpatine", "Padme", "Yoda"  
);


for($i = 1; $i < count($arr); $i++){
    echo "<h3 style='display: inline-block; background: grey; color: white; padding: 50px; border: 1px solid black;'>" . $arr[$i] . "</h2>";
   
    if($i % 3 == 0){
        echo "<br>";   
    }
}
?>