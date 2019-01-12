<?php

#Mala slova
$string = "ja se zovem amar bešlija";

function malaSlova($string){
    $stringCheck = strtolower($string);
    if($string === $stringCheck){
        $string = ucwords($string);    
        echo $string . " was written in lowercase, and now we have Camel Case";
    }else{
        $string = strtolower($string);
        echo "'" . $string . "' was not written in lowercase, so we made it lowercase now";
    }
}

malaSlova($string);
?>