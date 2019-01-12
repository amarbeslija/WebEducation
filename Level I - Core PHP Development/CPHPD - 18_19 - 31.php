<?php

#Sabiranje brojeva
$broj1 = 13;
$broj2 = 33;
$broj = 0;
for($i = $broj1; $i <= $broj2; $i++){
    $broj += $i;
}
echo "From number " . $broj1 . " to number " . $broj2 . " sum is " . $broj;
?>