<?php

#Datum

function showCurrentDate(){
   $datum =  date("d.m.Y");
   echo "Danas je: " . $datum . ".g.";
}

showCurrentDate();
?>