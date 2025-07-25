<?php 

    $jour = false;
    function bonjour($jour) {
        if ($jour) {
            echo strtoupper("bonjour");
        }else {
            echo strtoupper("bonsoir");
        }
    }

    bonjour($jour)
?>