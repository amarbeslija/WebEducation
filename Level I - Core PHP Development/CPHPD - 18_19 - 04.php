Ovo je neki proizvoljni tekst.
I njegov proizvoljni nastavak. 

<?php

# Kreirati prazan PHP dokument, sa ekstenzijom .php te 
# pravilno postaviti PHP tagove. Između njih dodati naredbu:
  echo "Hello from PHP! <br>";
# Prije i poslije PHP tagova staviti proizvoljni tekst.
# Sve pokrenuti preko servera i vidjeti šta se dešava.
# Pokušati analizirati šta bi se dogodilo da ovaj fajl nismo 
# pokrenuli preko servera. 

?>

Ovo je također neki proizvoljni tekst.
I ovo je također njegov proizvoljni nastavak.


<?php

/*
 * Šta smo ovdje uradili? U suštini smo ispisali najobičniji tekst bez PHP-a
 * i ikakvih HTML tagova, prije i poslije <?php i ?> tagova. Šta se dešava?
 * Dešava se to da server svaki tekst koji nađe prije ili poslije PHP tagova
 * tretira kao da su namijenjeni za ispis, te ne reaguje nikakvom greškom kao
 * kad bismo isti tekst stavili unutar PHP-a.
 * Šta ovo znači? Ovo znači da možemo van PHP ispisvati i HTML, i CSS i JavaScript 
 * kod, kao i SVG, a PHP interpreter neće reagirati na to greškom jer su van njegovog
 * domena (van PHP tagova). To bi značilo da možemo ispisivati praktično PHP-om
 * dinamičke stvari unutar HTML-a, bez da zamaramo interpreter i server bespotrebnim ispisom
 * običnog, statičkog teksta kroz PHP i echo/print naredbe.
 */ 

?>