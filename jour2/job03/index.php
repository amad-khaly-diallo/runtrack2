<?php
    // boucle de 0 a 99
    for ( $i = 0 ; $i < 100 ; $i++) {
        //condition pour mettre les nombres en italique
        if ( $i >= 0 && $i < 20 ) {
            echo "<i>" . $i . "</i>"; 
        }
        //condition pour mettre les nombres en italique
         elseif ( $i > 25 && $i < 50) {
            echo "<u>" . $i . "</u>";
        }//remplacer 42 par la plateforme
        elseif ( $i == 42 ) {
            echo "La Plateforme";
        } else {
            echo $i;
        }
        echo "<br>";

    }
?>