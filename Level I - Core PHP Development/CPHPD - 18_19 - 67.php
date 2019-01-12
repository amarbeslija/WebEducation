<?php

#Klasa Page

class Page{
    public $head, $body, $scripts, $styles, $title;
    
    public function __construct($head, $body, $scripts, $styles, $title){
        $this->head = $head;
        $this->body = $body;
        $this->scripts = $scripts;
        $this->styles = $styles;
        $this->title = $title;
    }
    
    public function render(){
        echo "<html>";
            echo "<head>";
                echo "<title> {$this->title} </title>";
                echo "<meta charset='utf-8'>";
                echo "<style>{$this->styles}</style>";
                echo $this->head;
            echo "</head>";
            echo "<body>";
                echo $this->body;
                echo "<script>{$this->scripts}</script>";
            echo "</body>";
        echo "</html>";
    }
    
    public function __toString(){
        return $this->render();
    }
}

$stranica = new Page(
    "<meta name='author' content='amarbeslija'>",
    "<h1>Hello from dynamic page!</h1>",
    "alert('Hello!');",
    "h1{color: red;}",
    "Vježba 18_19- 67"
);

$stranica->render();
    
?>