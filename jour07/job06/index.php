<?php
    function leetSpeak($str) {
        $leet = [
        'A' => '4',
        'a' => '4',
        'E' => '3',
        'e' => '3',
        'I' => '1',
        'i' => '1',
        'O' => '0',
        'o' => '0',
        'S' => '5',
        's' => '5',
        'T' => '7',
        't' => '7'
    ];

    return strtr($str, $leet);
    }

    echo leetSpeak("hello everyone");

?>