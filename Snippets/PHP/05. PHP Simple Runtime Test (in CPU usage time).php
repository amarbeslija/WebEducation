<?php

class ExecutionTime
{
     private $startTime;
     private $endTime;
     
     #Construct method to instantiate the class and start counting
     public function __construct(){
        $this->start();
     }
     
     #Method which start counting (recording the execution time)
     public function start(){
         $this->startTime = getrusage();
     }

     #Method which ends counting (recording the execution time)
     public function end(){
         $this->endTime = getrusage();
     }

     #Method which calculates the time in miliseconds
     private function runTime($ru, $rus, $index) {
         return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
     -  ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
     }    

     #Method which ends the counting (recording time) and return us CPU and System calls time in miliseconds
     public function __toString(){
         $this->end();
         return "This process used " . $this->runTime($this->endTime, $this->startTime, "utime") .
        " ms for its computations\nIt spent " . $this->runTime($this->endTime, $this->startTime, "stime") .
        " ms in system calls\n";
     }
 }

#Usage of the class

#Instantiate new ExecutinTime object (this is where counting start)
$execution = new ExecutionTime();

#Put your script below
for($i=0; $i<100000; $i++){
  #Put your script here
}

#To end the counting and get the result, just echo the object you created
echo $execution;

?>