<?php

#Kalkulator

class Kalkulator{
    public $operand1;
    public $operand2;
    public $result;
    
    public function __construct($operand1, $operand2){
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
    }
    
    public function add(){
        $this->result = $this->operand1 + $this->operand2;
    }
    
    public function sub(){
        $this->result = $this->operand1 - $this->operand2;        
    }
    
    public function __toString(){
        return "Treutna vrijednost promjenljive rezultat je: {$this->result} <br>";
    }
}

//Kreiranje objekta i probavanje klase
$calc = new Kalkulator(15, 10);
$calc->add();
echo $calc;
$calc->sub();
echo $calc;

?>