<?php


#Obrtanje stringa
$string = "anavolimilovana";

function obrtanjeStringa($string){
    $mojniz = str_split($string);
    $mojnizdva = array_reverse($mojniz);

    $mojstring = implode($mojniz);
    $mojstringdva = implode($mojnizdva);

    $mojstring = md5($mojstring);
    $mojstringdva = md5($mojstringdva);

    if($mojstring === $mojstringdva){
        echo "Cool";
    }else{
        echo "Not cool!";
    }
    
}

obrtanjeStringa($string);
?>