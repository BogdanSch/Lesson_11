<?php
const SIGN = "Деканат";

$events = [
    "scholarships" => "отримання стипендії",
    "deductions" => "на відрахування через вашу не успішність",
    "excellent-students" => "оголошення вдячності за успіхи в навчанні",
    "premium" => "нарахуванні премії за участь в олімпіаді"
];

$people = [
    "misha" => [
        "name" => "Михайло"
    ],
    "arsen" => [
        "name" => "Арсеній"
    ],
    "mark" => [
        "name" => "Марк"
    ],
    "bohdan" => [
        "name" => "Bohdan"
    ],
    "igor" => [
        "name" => "Igor"
    ],
    "oleg" => [
        "name" => "Oleg"
    ],
    "anya" => [
        "name" => "Anya",
    ]
];

$orders["misha"] = "deductions";
$orders["arsen"] = "scholarships";
$orders["mark"] = "premium";
$orders["bohdan"] = "excellent-students";
$orders["igor"] = "premium";
$orders["oleg"] = "deductions";
$orders["anya"] = "";