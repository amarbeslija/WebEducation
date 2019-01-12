<?php

#Klasa Point

class Point{
    public $x = 13;
    public $y = 15;
    
    public function Show(){
        return "Position is x: {$this->x}, y: {$this->y}";
    }
}


$point = new Point();
echo $point->Show();
?>