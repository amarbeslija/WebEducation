<?php

$godinaRodenja = 1980;
$trenutnaGodina = date("Y");
$korisnikGodine = $trenutnaGodina - $godinaRodenja;
echo "Korisnik ima " . $korisnikGodine . " godina!";

/*** NAPOMENE ***/

# Koristili smo funkciju date sa parametrom "Y" koji funkciji govori da nam vrati trenutnu 
# godinu u četveroznamenkastom obliku (kako bismo mogli vršiti pravilne kalkulacije sa njom)
#
# Također, iskoristili smo i varijable:
    # godinaRodenja
    # trenutnaGodina
    # korisnikGodine
#
# Također koristili smo konkatenaciju stringova (spajanje stringova) u liniji broj 6,
# kao i računsku operaciju oduzimanja između dvije varijable kako bismo dobili broj godina (linija 5).

?>