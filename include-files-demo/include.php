<?php
if(false){
    include ("params.php");
}
else{
    include("params1.php");
}
/* змінні $user и $today задані у файлі params.php*/
echo "<h1 style=\"color: blue;\">Привіт, $user!</h1>\n"; // виведе "Привіт, Василь!"
echo "<h2>Сьогодні $today</h2>"; // виведе, наприклад, "Сьогодні 23.03.2020"