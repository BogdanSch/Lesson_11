<?php
namespace Library{
    /**
    *Бібліотека функцій для математичних обчислень
    *@author Bohdan
    */
    function reverse_str($str){
        return strrev($str);
    }
    function remove_odd_strings($str){
        $words = explode(" ", $str);

        $even_words = [];
        
        for ($i=0; $i < count($words); $i++) { 
            if($i % 2 == 0)
                array_push($even_words, $words[$i]);
        }
        return implode(" ", $even_words);
    }
    function glue_first_letters_of_strings($words){
        $res = "";
        foreach ($words as $value) {
            $res .= $value[0];
        }
        return $res;

    }
}