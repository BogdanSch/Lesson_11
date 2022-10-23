<?php

require_once "data.php";

foreach ($people as $key => $man_info) {
    $event_key = $orders[$key];
    if ($event_key != "") {
        foreach ($man_info as $key1 => $info) {
            if ($key1 == "name")
                $str = "Шановний $info!";
        }
        $str .= "\nЗапрошуємо Вас на " . $events[$event_key];
        switch ($event_key) {
            case "scholarships":
                $str .= "\nЧекаємо вас завтра!";
                break;
            case "deductions":
                $str .= "\nВи показали себе, як байдужого до навчання!";
                break;
            case "excellent-students":
                $str .= "\nВи отримаєте подарунок :-)";
                break;
            case "premium":
                $str .= "\nВи отримаєте подарунок за участь в олімпіаді:-)";
                break;
            default: $str .= "\nВибачте, але Вас поки що нікуди не запрошують...";
        }
        $str .= "\n" . SIGN . "\n";

        echo $str;
    }
    echo "\n";
}