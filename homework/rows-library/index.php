<?php

require_once "library.php";

echo Library\reverse_str("Hello World!")."\n";
echo Library\remove_odd_strings("I love PHP so much!")."\n";
echo Library\glue_first_letters_of_strings(["I", "love", "C#", "so", "much"]);
