<?php

#Odabir datuma
$dana = 31;
$mjeseci = 12;
$godine_start = 1980;
$godine_end = date("Y");

echo "<select>";
echo "<option value=''>Dan</option>";
for($i=1;$i<=$dana;$i++){
    echo "<option value='" . $i . "'>$i</option>";
}
echo "</select>";

echo "<select>";
echo "<option value=''>Mjesec</option>";
for($j=1;$j<=$mjeseci;$j++){
    echo "<option value='" . $j . "'>$j</option>";
}
echo "</select>";

echo "<select>";
echo "<option value=''>Godina</option>";
for($k=$godine_start; $k<=$godine_end;$k++){
    echo "<option value='" . $k . "'>$k</option>";
}
echo "</select>";
?>