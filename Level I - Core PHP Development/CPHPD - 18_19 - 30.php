<?php

#Ispitivanje rečenice
$text = "amarbeslija";
$letter = "a";
$counter = 0;
for($i=0; $i<strlen($text);$i++){
    if(substr($text, $i, 1) == $letter){
        $counter += 1;
    }
}
echo "We found letter <strong>" . $letter . " </strong>" . $counter . " times in the sentence: " . $text . "!";
?>