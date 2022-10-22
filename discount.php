<?php

function discount1($price) {
    return $price - 20;
}

function discount2($price) {
    return $price / 2;
}

function discount3($price) {
    return $price * .8;
}

function getPrice($discount = null) {
    $price = 100;
    if (isset($discount))
        $price = call_user_func($discount, $price);
    return $price;
}

echo "Ціна: \$" . getPrice() . "\n";
echo "Ціна зі знижкою: \$" . getPrice('discount1') . "\n";
echo "Ціна зі знижкою: \$" . getPrice('discount2') . "\n";
echo "Ціна зі знижкою: \$" . getPrice('discount3') . "\n";