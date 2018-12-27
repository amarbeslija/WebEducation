<html>
    <head>
        <title>CPHPD - 18_19 - 09</title>
        <meta charset="utf-8">
    </head>
    <body>
        <img src="assets/CPHPD%20-%2018_19%20-%2009.png" alt="Facebook slika za analizu.">
        
        <!--
           - Primjetite da ovdje nismo koristili PHP već najosnoviji HTML markup ispis kako bi stranica bila validna.
           - Cilj je bio da uključimo sliku koju je potrebno analizirati, odnosno potražiti moguće varijable na njoj.
           - Također primjetite da je ovo format HTML komentara.
           -->
    </body>
</html>

<?php

/*** RJEŠENJE ZADATKA ***/

   /*
    U Facebook-ovom dizajnu samog zaglavlja stranice,
    mogli bismo pronaći više promjenljivih. Recimo,
    prve koje su očite su promjenljiva za Search polje,
    promjenljive za ime i fotografiju korisnika,
    promjenljive za nove notifikacije, prijateljstva ili poruke.
    Ali razmislite, svaka ikonica u ovom dizajnu može biti u promjenljivoj,
    na određeni način, jer onda Facebook može lakše izmjeniti dizajn na svakoj
    stranici samog sistema.
    
    Čak postoji slučaj da i kompletan ovaj header/zaglavlje bude u jednoj promjenljivoj,
    te da se učitava uslovno, jer različite stranice imaju različita zaglavlja.
    
    Također, stanovišta uključivanja fajlova, mogli bismo napraviti i moguću shemu:
        1. Stranica na koju se učitava header
            2. Header koji učitava sljedeće fajlove:
                3. Ikonice
                4. Fotografiju
                5. Tekstualne podatke
                6. Fajl koji vrši pretragu i vraća podatke
                7. Fajl koji učitava notifikacije i njihov broj

    */ 

?>