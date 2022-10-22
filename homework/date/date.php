<?php

$text = "31.12.2020";

function get_month($month_number){
    switch ($month_number) {
        case 1:
            return 'Jan';
        case 2:
            return 'Feb';
        case 3:
            return'Mar';
        case 4:
            return'Apr';
        case 5:
            return'May';
        case 6:
            return'Jun';
        case 7:
            return'Jul';
        case 8:
            return'Aug';
        case 9:
            return'Sep';
        case 10:
            return'Oct';
        case 11:
            return'Nov';
        case 12:
            return'Dec';
        default:
            return'Not a valid month!';
            break;
    }
}
$n = 0;
function m($matches){
    if($GLOBALS["n"] == 0) return " ".get_month(trim($matches[0], '.'))." ";
    $date_n = trim($matches[0], '.');
    $GLOBALS["n"] + 1;
    return ' '.$date_n.' ';
}

$reg_month = '/\.\d{2}\./';
echo preg_replace_callback($reg_month, "m", $text)." year";