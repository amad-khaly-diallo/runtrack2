<?php

    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    
    
    $temp = $str[0];
    $ar_reversed = [];

    for ( $i = 1 ; $i < strlen($str) ; $i ++) {
        array_push($ar_reversed, $str[$i]);
    }

    array_push($ar_reversed, $temp);
    foreach($ar_reversed as $string) {
        echo $string;
    }