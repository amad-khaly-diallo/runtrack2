<?php

$hauteur = 15;

/*
j'ai considerer le le triangle comme un rectangle dont certaines parties sont invisible (juste des espacement --> &nbsp;)
*/

for ($i = 1; $i <= $hauteur; $i++) {

    // une boucle pour les espaces vides
    for ($j = 1; $j <=  $hauteur - $i; $j++) {
        echo "&nbsp; ";
    }
    //boucle pour les / ; \ ; _ et ^
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        if ($i == 1 ) {
            echo "&nbsp;^";
        }
        elseif ($k == 1 && $i != 1 ) {
            echo " &nbsp;/ ";
        }
        elseif ( $k == (2 * $i - 1)) {
            echo "&nbsp;\\ ";
        }
        elseif ($i == $hauteur){
            echo "_";
        }
        else {
            echo "&nbsp;&nbsp;";
        }
    }

    echo "<br>";
};
