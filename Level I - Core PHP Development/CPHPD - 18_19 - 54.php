<?php

#Ispis Tag-a
function ispisTaga($tagName, $style, $content, $repeat){
    $repeat = ($repeat == 0)? 1 : $repeat;
    for($i=0; $i<$repeat; $i++){
        echo "<$tagName style=$style>";
        echo $content;
        echo "</$tagName>";
    }
}

ispisTaga("p", "color: red", "Ovo je moj sadržaj",0); 
?>