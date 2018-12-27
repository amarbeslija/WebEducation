<?php

#Uloge na sistemu

$student = 1;
$profesor = 2;
$koordinator = 4;
$podrska = 8;

$logovaniKorisnik = 4;
$adminPanelKorisnici = $koordinator|$podrska;
if( ($logovaniKorisnik & $adminPanelKorisnici) != 0){
    echo "Logovan je korisnik sa administratorskim pravima!";
}else{
    echo "Logovan je korisnik bez administratorskih prava.";
}

# Ovdje smo koristili bit operatore za provjeru da li se logovani korisnik nalazi u listi adminPanelKorisnika,
# te na osnovu toga smo korisnika ili logovali sa administratorskim pravima, odnosno bez njih u drugom slučaju.
# Kako funkcionira ova provjera? Funkcionira na osnovu binarnog (bit) AND gdje se ovi brojevi uloga (1,2,4,8) pretvaraju u binarne brojeve
# 0001, 0010, 0100, 1000, te se sa binarnim (bit) ILI (|) vrši poređenje te nakon toga i provjera.
# Primjeri bit operacija:
    # 1 (0001) & 2 (0010) = 0000 (da bismo dobili 1 kao rezultat u oba broja se mora na istom mjestu naći jedinica)
    # 1 (0001) | (0010) = 0011 (da bismo dobili 1 kao rezultat barem u jednom broju se mora naći jedinica na jednom mjestu)

?>