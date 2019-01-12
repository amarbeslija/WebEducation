<?php

#Crna lista

$forInclude = "page.html";
$pages = array("page.html", "page.htm", "page.php");

if(in_array($forInclude, $pages)){
    echo "Sorry! We cannot include that file!";
}else{
    echo "Include: $forInclude page!";    
}
?>