<?php

#Procjena cijene proizvoda
$productOne = "DSLR Canon 600D";
$productTwo = "Korg Pa4X PRO";
$productThree = "Fender Jazz Bass";

$productOnePrice = 600;
$productTwoPrice = 7000;
$productThreePrice = 1200;

$productOneNormalPrice = 600;
$productTwoNormalPrice = 6000;
$productThreeNormalPrice = 1500;

$productCheck = 3;

$productCheckName = "";
$productCheckPrice = 0;
$productCheckNormalPrice = 0;

switch($productCheck){
    case 1:
        $productCheckName = $productOne;
        $productCheckPrice = $productOnePrice;
        $productCheckNormalPrice = $productOneNormalPrice;
        break;
    case 2:
        $productCheckName = $productTwo;
        $productCheckPrice = $productTwoPrice;
        $productCheckNormalPrice = $productTwoNormalPrice;
        break;
    case 3:
        $productCheckName = $productThree;
        $productCheckPrice = $productThreePrice;
        $productCheckNormalPrice = $productThreeNormalPrice;
        break;
    default:
        $productCheckName = $productOne;
        $productCheckPrice = $productOnePrice;
        $productCheckNormalPrice = $productOneNormalPrice;
        break;
}

if($productCheckPrice > $productCheckNormalPrice){
    echo "Product " . $productCheckName . " is too expensive!";
}else if($productCheckPrice < $productCheckNormalPrice){
    echo "Product " . $productCheckName . " is cheap!";
}else{
    echo "Product " . $productCheckName . " is priced regularly!";
}
?>