<?php
#APHPD - 18_19 - 06

#Klasa i njena svojstva
class DateDifference{
    public $date1 = "01-01-2017";
    public $date2 = "03-09-2018";
    public $export = "all";
    public $print = "";
    
    public function diff(){
        $dateC1 = new DateTime($this->date1);
        $dateC2 = new DateTime($this->date2);
        $print = $dateC1->diff($dateC2);
        return $print->days;
    }
}

#Instanciranje klase u dva nova objekta
$d1 = new DateDifference();
$d1->date1 = "03-03-2017";
$d1->date2 = "03-07-2019";

$d2 = new DateDifference();

echo $d1->diff();
echo "<br>";
echo $d2->diff();

#Ispis da vidimo šta ima u klasama
    //var_dump($d1);
    //var_dump($d2);

?>