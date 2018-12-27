<?php

# Da bismo analizirali Headers and Response,
# odnosno Zahtjeve i Odgovore koje šalju 
# server i klijent (naš web browser), a prilikom
# učitavanja neke stranice, potrebno je da sa tipkom F12 
# ili kraticom Ctrl + Shift + i otvorimo Developers panel 
# Google Chrome browsera ili nekog drugog browsera. 
# U Network tabu (unutar ovog novootvorenog Developers panela), 
# prilikom Refresha (ili F5 ili Ctrl + R) stranice ćemo moći vidjeti 
# Zahtjeve i Odgovore, vrijeme učitavanja i sve što nas zanima.


/*
 * Ako se pitate sada šta će nam ovo u životu, moramo reći prije svega
 * da je Developers panel jako koristan za debugging JavaScript aplikacija,
 * trenutnu stilizaciju pomoću CSS i editovanje HTML-a (odmah se reflektuje na stranici,
 * ne moramo sačuvati, možemo kopirati kada smo zadovoljni u naš Code Editor, a prilikom
 * Refresh-a stranica se vrati na izvorno stanje), te da je veoma važan za provjeru
 * koliko brzo se naša aplikacija učitava, koliko je opterećenje servera što se tiče svakog
 * fajla koji se učitava uz naš .php fajl te da svi podaci mogu poslužiti za optimizaciju
 * sistema što će nam nakon izrade web stranica i aplikacija biti veoma važno jer želimo
 * da imamo što bolji score na stranicama poput:
    * https://tools.pingdom.com
    * https://gtmetrix.com
    * https:// developers.google.com/speed/pagespeed/insights
 * Razlog za ovo je što svi ovi detalji i sitnice utiču na naše rangiranje na www-u,
 * kao i to što korisnici - po većini istraživanja, nisu spremni da čekaju mnogo više od 
 * 3-5 sekundi da se stranica učita, a gdje obje ove stvari direktno utiču na samo poslovanje
 * onog klijenta čija je stranica.
 */

?>