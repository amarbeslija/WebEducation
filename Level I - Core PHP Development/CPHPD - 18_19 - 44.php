<?php

#Bijela lista

$forInclude = "page.html";
$pages = array("page.html", "page.htm", "page.php");

if(in_array($forInclude, $pages)){
    echo "Include: $forInclude page!";    
}else{
    echo "Sorry! We cannot include that file!";
}
?>