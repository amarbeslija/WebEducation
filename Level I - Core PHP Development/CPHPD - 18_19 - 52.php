<?php

#Widget

$vijesti = array(
    array("Palo dva metra snijega", date('d.m.Y'), "Danas je u Bosni palo dva metra snijega."),
    array("Džeko dao dva gola", date('d.m.Y'), "Edin Džeko sinoć je postigao dva pogotka u odlučujućoj utakmici."),
    array("Velike gužve u saobraćaju", date('d.m.Y'), "Sutra se očekuju velike gužve u saobraćaju zbog utakmice.")
);
function widget(array $nizVijesti){
    for($i = 0; $i < count($nizVijesti); $i++){
        echo "<div class='vijesti'>";
        echo "<h1>" . $nizVijesti[$i][0] . "</h1>";
        echo "<span>Objavljeno: " . $nizVijesti[$i][1] . "</span>";
        echo "<p>" . $nizVijesti[$i][2] . "</p>";
        echo "</div>";
    }
}
widget($vijesti);
?>