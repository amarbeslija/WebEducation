<?php
#APHPD - 18_19 - 07

#Klasa i njena svojstva
class DateDifference{
    public $date1, $date2, $export;
    public $print = "";  
    
    public function __construct($export, $date1, $date2 = null){
        $this->date1 = $date1;
        $this->date2 = $date2;
        $this->export = $export;  
        
    }
    
    
    public function diff(){
        $dateC1 = new DateTime($this->date1);
        $dateC2 = $this->date2 == null ? new DateTime() : new DateTime($this->date2);
        $print = $dateC1->diff($dateC2);
        return $print->days;
    }
}

#Instanciranje klase u dva nova objekta
$d1 = new DateDifference("all", "01-01-2018");
$d2 = new DateDifference("all", "01-01-2017");

echo $d1->diff();
echo "<br>";
echo $d2->diff();

#Ispis da vidimo šta ima u klasama
    //var_dump($d1);
    //var_dump($d2);

?>