<?php

#Heroes 1

$heroji = array(
    array("Cho'Gall", 15, "https://heroesofthestorm.com/static/images/heroes/busts/chogall.jpg"),
    array("The lost vikings", 5, "https://heroesofthestorm.com/static/images/heroes/busts/the-lost-vikings.jpg"),
    array("Tychus", 12, "https://heroesofthestorm.com/static/images/heroes/busts/tychus.jpg"),
    array("Valla", 25, "https://heroesofthestorm.com/static/images/heroes/busts/valla.jpg")
);

for($i = 0; $i < count($heroji); $i++){
        echo "<div style='display: inline-block; margin: 10px; padding: 10px;'>";
        echo "<img src='" . $heroji[$i][2] . "' alt='" . $heroji[$i][0] . "'>";
        echo "<h2> Name: " . $heroji[$i][0] . "</h2>";
        echo "<h3> Grade: " . $heroji[$i][1] . "</h3>";
        echo "</div>";
}
?>