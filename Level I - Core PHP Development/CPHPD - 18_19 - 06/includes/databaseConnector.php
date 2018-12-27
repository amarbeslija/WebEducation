<?php
function databaseConnector($serverName, $userName, $password){
    //Provjera da li su proslijeđeni parametri
    if(isset($serverName) && isset($userName) && isset($password)){
        //Pravljenje konekcije
        $connection = mysqli_connect($serverName, $userName, $password);
        
        //Provjera konekcija
        if(!$connection){
            die("Neuspješna konekcija!");
        }else{
            return $connection;
        }
    }
}