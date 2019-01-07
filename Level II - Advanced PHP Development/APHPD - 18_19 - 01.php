<?php
#APHPD - 18_19 - 01

#Koristiti klasu DateTime i njenu metodu diff() za razliku između datuma

function DateDifference($export, $date1, $date2 = null){
    
    $date1 = new DateTime($date1);
    $date2 = $date2 == null ? new DateTime() : new DateTime($date2);
    $interval = $date1->diff($date2);
    $print = "";
    switch($export){
        case "years":
            $print = $interval->y;
            break;
        case "months":
            $print = $interval->m;
            break;
        case "days":
            $print = $interval->d;
            break;
        case "hours":
            $print = $interval->h;
            break;
        case "minutes":
            $print = $interval->i;
            break;
        case "seconds":
            $print = $interval->s;
            break;
        case "all":
        default:
            $print = "Years: $interval->y, months: $interval->m, days: $interval->d, hours: $interval->h, minutes: $interval->i, seconds: $interval->s";
            break;
    }
    echo "First date: " . $date1->format('d-m-Y') . "<br>";
    echo "Second date: " . $date2->format('d-m-Y') . "<br>";
    echo $print;
}

DateDifference("all", "26-10-2017");

?>