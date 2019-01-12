<?php

#Računske operacije

@$operand1 = $_GET['operand1'];
@$operand2 = $_GET['operand2'];
@$operator = $_GET['operator'];
$rezultat = 0;
function racunskeOperacije($operand1, $operand2, $operator){
    global $rezultat;
    switch($operator){
        case "+":
            $rezultat = $operand1 + $operand2;
            break;
        case "-":
            $rezultat = $operand1 - $operand2;
            break;
        case "*":
            $rezultat = $operand1 * $operand2;
        break;
        case "/":
             if($operand1 == 0 || $operand2 == 0){
                $rezultat = "nemoguća misija";
            }else{
                 $rezultat = $operand1 / $operand2;
             }
        break;
        default:
            $rezultat = $operand1 + $operand2;
        break;
    }
    echo "Rezultat je: " . $rezultat;
}
racunskeOperacije($operand1, $operand2, $operator);
?>

<form method="GET" action="">
    <label>Operand1</label>
    <input type="number" name="operand1">
    <br><br>
    <label>Operand2</label>
    <input type="number" name="operand2">
    <br><br>
    <select name="operator">
        <option value="">Operator</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br><br>
    <input type="submit" value="Pošalji">
</form>