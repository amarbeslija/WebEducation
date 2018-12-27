<?php

#Prezentacija restorana

$nazivRestorana = "Pored puta";
$GPSLatituda = 123456;
$GPSLongituda = 123456;
$ocjenaRestorana = 10;
$trenutniStatus = "Otvoren";
$brojTelefona = "+387-00-111-222";

echo "<h1> $nazivRestorana </h1>";
echo "<h2>Koordinate restorana: $GPSLatituda, $GPSLongituda</h2>";
echo "<h3>Ocjena: $ocjenaRestorana</h3>";
echo "<h4>Restoran je: $trenutniStatus </h4>";
echo "<p>Broj telefona: <a href='tel:" . $brojTelefona . "'>$brojTelefona</a></p>";

/*** NAPOMENE ***/

    # Koristili smo konkatenaciju (nadovezivanje) stringova
    # Koristili smo varijable i sa stringovima i sa integerima (brojevima)
    # Ispisivali smo i kompletne HTML tagove zajedno sa našim sadržajem
    #
    # U suštini pokazali smo (na najmanjem mogućem slučaju) kakvu PHP dinamiku unosu unutar HTML stranica

?>