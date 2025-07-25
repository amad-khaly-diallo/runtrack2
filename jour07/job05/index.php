<?php
    function occurrence($str, $char) {
        return substr_count(strtolower($str), strtolower($char));
    }

    echo occurrence("bonjour tout le monde ", "O");
?>