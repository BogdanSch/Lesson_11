<?php

$statuses = [
    "PHP developer" => 25000,
    "Android developer" => 35000,
    "Python web developer" => 30000,
    "C# Web developer" => 50000,
];
$experiences =[
    "Junior" => .9,
    "Mid" => 1.3,
    "Senior" => 2
];

function give_salary($status, $experience){
    $salary = $status * $experience;
    $status_name = array_search($status, $GLOBALS["statuses"]);
    $experience_name = array_search($experience, $GLOBALS["experiences"]);
    return "Salary for $status_name $experience_name is $salary$";
}



print call_user_func("give_salary", $statuses["C# Web developer"], $experiences["Senior"]);