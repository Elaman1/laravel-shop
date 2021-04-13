<?php

namespace App\Classes;

class ParseCurrency {
    public function __construct() {
        //
    }

    public function parse() {
        // Parser Site
        $String = file_get_contents('https://bai.kz/kursy/');

        // if (session('currency', 'RUB')) {
        //     $p1 = $String;
        //     $p2 = '<tr class="curr-row RUB">';
        //     $p3 = '</td>';

        //     $num1 = strpos($p1, $p2);
            
        //     if ($num1 === false) return 0;
        //     $num2 = substr($p1, $num1);
        //     $str = strip_tags(substr($num2, 0, strpos($num2, $p3)));
            
            
        //     return implode('', array_filter(str_split($str), function($digit) {
        //         return ('.' === $digit || ',' === $digit || is_numeric($digit));
        //     }));
            
        //     return filter_characters($var);
        // }

        // if (session('currency', 'USD')) {
        //     $p1 = $String;
        //     $p2 = '<tr class="curr-row USD">';
        //     $p3 = '</td>';

        //     $num1 = strpos($p1, $p2);
            
        //     if ($num1 === false) return 0;
        //     $num2 = substr($p1, $num1);
        //     $str = strip_tags(substr($num2, 0, strpos($num2, $p3)));
            
            
        //     return implode('', array_filter(str_split($str), function($digit) {
        //         return ('.' === $digit || ',' === $digit || is_numeric($digit));
        //     }));
            
        //     return filter_characters($var);
        // }



    }
}


?>