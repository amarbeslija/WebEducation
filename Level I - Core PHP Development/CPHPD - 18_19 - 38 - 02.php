<?php

#Gallery

$superheroImage = array(
    "http://amarbeslija.com/ita/predavanja/corephp/vjezba2/catwoman.gif",
    "http://amarbeslija.com/ita/predavanja/corephp/vjezba2/robin.gif",
    "http://amarbeslija.com/ita/predavanja/corephp/vjezba2/nightwing.gif"
);

$superheroAlias = array(
    "Catwoman",
    "Robin",
    "Nightwing"
);

$superheroRealName = array(
    "Selina Kyle",
    "Tim Drake",
    "Dick Grayson"
);

#HTML export part
for($i=0; $i<sizeof($superheroImage); $i++){
    echo "<div class='superhero'>";
    echo "<img src=\" $superheroImage[$i] \" alt='Superhero Image'>";
    echo "<h3> $superheroAlias[$i] </h3>";
    echo "<h6> $superheroRealName[$i] </h6>";
    echo "</div>";
}
?>