<?php

/*** KOD SA GREŠKAMA ***/

/*
 * <?php
 * $r = 2;
 * PI = 3.14;
 *
 * {
 * $area = $R * $R *PI;
 * }
 *
 * {
 * $perimiter 2 * $R * PI
 * }
 *
 * echo $area
 * echo "<br />";
 * echo $Perimeter
 *
 */

/*** KOD BEZ GREŠAKA ***/

<?php
    $r = 2;
    CONST PI = 3.14;

    {
        $area = $r * $r * PI;
    }

    {
        $perimeter = 2 * $r * $r;
    }

    echo $area;
    echo "<br />";
    echo "perimeter";
    
?>