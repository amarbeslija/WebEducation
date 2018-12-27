<?php
    $nazivRestorana = "AS";
    $adresa = "Garovci, Hadžići";
    $ocjenaRestorana = 4.5;
    $trenutniStatus = "Otvoren";
    $brojTelefona = "+387 61 244 298";
?>
<html>
    <head>
        <title>CPHPD - 18_19 - 10a</title>
        <meta charset="utf-8">
    </head>
    <body>
        <!-- Napomena, koristimo osnovni HTML prikaz, bez CSS stilizacije -->
        
        <img src="assets/CPHPD%20-%2018_19%20-%2010%20-%2001.jpg">
        <h1> <?=$nazivRestorana; ?> </h1>
        <button> <a href="https://maps.google.com?q=<?php echo $nazivRestorana . ", " . $adresa ?>" target="_blank">Maps Location </a> </button>
        <hr>
        <p>Adresa: <?=$adresa; ?> </p>
        <p>Telefon: <a href="tel: <?=$brojTelefona; ?>"></a><?=$brojTelefona; ?></p>
        <h2>Ocjena restorana: <?=$ocjenaRestorana; ?></h2>
        <p>Trenutno: <?=$trenutniStatus; ?></p>
    </body>
</html>

<?php

/*** NAPOMENE ***/

    # Primjetite da smo na mnogo mjesta kombinovali PHP zajedno sa HTML-om.
    # Možemo, još jednom, vidjeti da PHP možemo prekinuti i započeti koliko god hoćemo puta,
    # te oko njega ispisivati tekst ili komande drugih programskih/markup jezika.

?>