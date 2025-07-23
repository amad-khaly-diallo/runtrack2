<?php
    $str = "Les choses que l'on possède finissent par nous posséder.";

    // Extraire les caractères (UTF-8 safe)
    preg_match_all('/./us', $str, $matches);

    // Obtenir le tableau de caractères
    $lettres = $matches[0];

    // Afficher chaque caractère à l'envers
    for ($i = count($lettres) - 1; $i >= 0; $i--) {
        echo $lettres[$i];
    }
