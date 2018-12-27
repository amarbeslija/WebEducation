<?php

# Cilj vježbe je pokazati ispis brojeva formatirajući ih funkcijom printf()

# Ispis pomoću funkcije printf() i formatiranje u oktalni brojni sistem
printf("Broj 13 je u oktalnom brojnom sistemu broj %o.", 13);
echo "<br>";
# Ispis pomoću funkcije printf() i formatiranje u heksadecimalni brojni sistem
printf("Broj 33 je u heksadecimalnom brojnom sistemu broj %x.", 33);
echo "<br>";
# Ispis pomoću funkcije printf() i formatiranje u binarni brojni sistem
printf("Broj 17 u binarnom brojnom sistemu je broj %b.", 17);
echo "<br>";

echo "**********************************************************************";

#Ispis pomoću printf() funkcije, ali koristeći varijable - isti ispis, drugačiji način
$brojA = 13;
$brojB = 33;
$brojC = 17;

printf("<h3> Broj $brojA je u oktalnom brojnom sistemu broj %o, dok je broj $brojB u heksadecimalnom brojnom sistemu broj %x, a broj $brojC u binarnom brojnom sistemu je broj %b.</h3>", $brojA, $brojB, $brojC);

/*** NAPOMENE ***/

# Više o funkciji printf() na: http://php.net/manual/en/function.printf.php ILI https://www.w3schools.com/php/func_string_printf.asp
# Pogledajte kako smo u drugom načinu ispisali i HTML <h3> tag zajedno sa String-om. PHP nema problem sa ispisom komandi drugih programskih (JS i slično.)
# i markup jezika (HTML, CSS, SVG) sve dok se nalaze unutar stringova.