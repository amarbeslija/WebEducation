<?php

#Login forma

function loginForm(){
    $pozadine = array("https://www.it-akademija.com/cms/mestoZaUploadFajlove/ITA_Naslovna_Septembar2018_bih_.jpg", "https://www.it-akademija.com/cms/mestoZaUploadFajlove/predlog-1_03.jpg", "https://www.it-akademija.com/cms/mestoZaUploadFajlove/predlog-1_05.jpg" );
    $pozadinaOdabrano = mt_rand(0, count($pozadine)-1);
    
    
    echo "<div style='width: 50%; background: url(" . $pozadine[$pozadinaOdabrano] . "); border: 10px solid #fefefe; opacity: 0.8;'>";
    echo "<div style='text-align: center; padding: 20px;'>";
    echo "<strong><label for='username'>Username</label></strong>";
    echo "<input type='text' name='username'>";
    echo "<br><br>";
    echo "<strong><label for='password'>Password</label></strong>";
    echo "<input type='password' name='password'>";
    echo "<br><br>";
    echo "<input type='submit' value='login'>";
    echo "</div>";
    echo "</div>";
}

loginForm();

/*
Fejk opacity sa :after pseudoelementom
div {
  width: 200px;
  height: 200px;
  display: block;
  position: relative;
}

div::after {
  content: "";
  background: url(image.jpg);
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}
*/
?>