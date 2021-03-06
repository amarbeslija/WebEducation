<?php


#Potrošnja goriva i pređeni put (dodatne stvari za provježbati)

$potrosnjaGoriva = 6;
$rezervoarStanje = 50;
$ocekivanaDistanca = 1000;
$vrstaGoriva = "benzin";
$cijenaGoriva = 2.00; # Jako optimistična cijena
define("KM", "kilometara");
define("ZAP", "litara");
define("POT", "litara na stotinu kilometara");

$mogucaDistanca = $rezervoarStanje / $potrosnjaGoriva * 100;
$mogucaDistanca = round($mogucaDistanca, 2);

# Koristimo IF-ELSE kontrolu toka da provjerimo da li je mogucaDistanca veća od ocekivanaDIstanca, te na osnovu toga procjenjujemo mogućnost prelaska automobila zadanog puta
if($mogucaDistanca > $ocekivanaDistanca){
    $mogucnost = "može";
}else{
    $mogucnost = "ne može";
}
$ukupnaCijena = ($ocekivanaDistanca * $potrosnjaGoriva) / 100;

echo "Automobil koji ima potrošnju od $potrosnjaGoriva " . POT . ", sa rezervoarom od $rezervoarStanje " . ZAP . ", može preći $mogucaDistanca " . KM . "!";
echo "<br>";
echo "Obzirom da je očekivana distanca $ocekivanaDistanca " . KM . ", ovaj automobil je " . $mogucnost . " preći bez sipanja goriva!";
echo "Ukupna cijena goriva koju vozač/ica treba da plati da bi prešao očekivanu distancu od $ocekivanaDistanca " . KM . " jeste $ukupnaCijena BAM."

# Ovo bismo mogli smatrati osnovnom i početkom jedne ozbiljne web aplikacije koja računa i kreira planove za putovanje, troškove i slično, 
# kao što je to stranica: https://www.viamichelin.com/
?>