<?php
#APHPD - 18_19 - 09

#Klasa i njena svojstva
class DateDifference{
    public $date1, $date2, $export, $print, $printDays;

    public function __construct($export, $date1, $date2 = null){
        $this->date1 = is_string($date1) ? $date1 : null;
        $this->date2 = is_string($date2) ? $date2 : null;
        $this->export = is_string($export) ? $export : "all";
        
    }
    
    
    public function diff(){
        $dateC1 = $this->date1 == null ? new DateTime() : new DateTime($this->date1);
        $dateC2 = $this->date2 == null ? new DateTime() : new DateTime($this->date2);
        $this->print = $dateC1->diff($dateC2);
        
    }
    
    public function printDate(){
        switch($this->export){
            case "years":
                $this->printDays = $this->print->y;
                break;
            case "months":
                $this->printDays = $this->print->m;
                break;
            case "days":
                $this->printDays = $this->print->d;
                break;
            case "hours":
                $this->printDays = $this->print->h;
                break;
            case "minutes":
                $this->printDays = $this->print->i;
                break;
            case "seconds":
                $this->printDays = $this->print->s;
                break;
            case "all":
            default:
                $this->printDays = "Years:" . $this->print->y . ", months: " . $this->print->m . ", days: " . $this->print->d . ", hours: " . $this->print->h . ", minutes: " . $this->print->i . ", seconds: " . $this->print->s;
                break;        
        }
        return $this->printDays;
    }
}

#Instanciranje klase u dva nova objekta
$d1 = new DateDifference("all", 01, "01-01-2018");
$d2 = new DateDifference("all", "01-01-2017");

$d1->diff();
echo $d1->printDate();

echo "<br>";
$d2->diff();
echo $d2->printDate();

#Ispis da vidimo šta ima u klasama
    //var_dump($d1);
    //var_dump($d2);

?>