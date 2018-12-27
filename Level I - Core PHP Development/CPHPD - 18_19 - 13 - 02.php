<?php

# Kompletnu vježbu potražite u folderu CPHPD - 18_19 - 13 - 02
# Napomena: Vježba ne koristi potpunu stilizaciju jer je cilj rad sa include() i require() 
#
# Za razliku od prethodne vježbe, u ovoj smo namjerno napravili grešku u fajlu pod nazivom about.php
# Koristeći funkciju require() zajedno sa greškom, dobili smo da stranica potpuno blokira zbog te greške u putanji (nepostojeća putanja, odnosno nepostojeći fajl u traženoj putanji).
# Da smo koristili funkciju include() i napravili ovakvu grešku, PHP interpreter bi također izbacio grešku, ali manjeg nivoa, i nastavio da učitava preostale dijelove istog fajla,
# dok require() blokira kompletno izvršavanje nakon greške.
#
# Pažljivo koristiti include() i require(), odnosno koristiti include() na fajlovima od kojih ne zavisi stranica u potpunosti već daju dodatne informacije, pa učitavanja može raditi i bez njega (recimo widget za vrijeme),
# a require() koristiti na fajlovima od kojih stranica direktno zavisi i bez kojih većina toga što se ispiše ne bi imalo smisla (glavni sadržaj stranice i tako dalje, zavisi direktno od konteksta aplikacije/stranice).

?>