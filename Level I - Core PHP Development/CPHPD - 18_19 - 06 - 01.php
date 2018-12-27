<?php

#Ispraviti greške u sljedećem kodu:

/*** KOD SA GREŠKAMA ***/

    /*
     * <?
     * ech "Moje ime je:"
     * echo "<br';
     * echo "Imam 25 godina"":
     * echo 'Školujem se za programera"';
     * ?
     */

/*** ISPRAVAN KOD ***/

echo "Moje ime je";
echo "<br>";
echo "Imam 25 godina";
echo 'Školujem se na ITAcademy"';


/*** NAPOMENA ***/

# Ako se pitate zašto nismo sklonili dvostruki navodnik na zadnjem ispisu
# to je zato što ovaj navodnik nije greška. Prvo iz razloga što imamo već jednostruke navodnike
# pravilno postavljene oko Stringa i drugo iz razloga što će u ovakvoj situaciji on se ispisati kao
# dio String-a, odnosno PHP interpreter na njega neće gledati kao na navodnik vezan za ispis,
# već ga gledati kao još jedan u nizu karaktera unutar String-a.
?>