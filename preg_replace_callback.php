<?php

$text = "04.01.2020\n";
$text.= "31.12.2021\n";

// функція зворотного виклику
function next_year($matches)
{
  return $matches[0] + 1;
}
function prev_month($matches)
{
  $n = trim($matches[0], '.');
  $n--;
  return '.'.$n.'.';
}

$reg_month = '/\.\d{2}\./';
// echo preg_replace_callback("/\d{4}/", "next_year", $text);
// echo preg_replace_callback($reg_month, "prev_month", $text);
echo preg_replace_callback($reg_month, "m", $text);