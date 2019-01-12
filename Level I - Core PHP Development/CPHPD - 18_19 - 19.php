<?php

#User validation 
$user = "bruce";
$pass = "batman";

$validUser = "bruce";
$validPass = "batman";

if($user === $validUser && $pass === $validPass){
    echo "User " . $user . "can enter the facility.";
}else{
    echo "User not recognized! Run!";
}

?>