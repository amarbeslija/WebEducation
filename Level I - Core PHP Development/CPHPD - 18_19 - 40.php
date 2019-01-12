<?php

#Authentification
$username = "Bruce";
$password = "Batman";
$niz = array("Peter"=>"Spiderman", "Klark"=>"Superman", "Bruce"=>"Batman");
if(in_array($password, $niz)){
    foreach($niz as $kljuc => $vrijednost){
        if($username == $kljuc && $password == $vrijednost){
            echo "We found the user!";
            break;
        }else{
            echo "Searching...";
        }
    }
}else{
    echo "Unknown User";
}
?>