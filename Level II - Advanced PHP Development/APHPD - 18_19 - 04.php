<?php
#APHPD - 18_19 - 04

#Klasa i njena svojstva
class DateDifference{
    public $date1 = "01-01-2017";
    public $date2 = "03-09-2018";
    public $export = "all";
    public $print = "";
}

#Instanciranje klase u dva nova objekta
$d1 = new DateDifference();
$d2 = new DateDifference();

#Ispis da vidimo šta ima u klasama
var_dump($d1);
var_dump($d2);

?>