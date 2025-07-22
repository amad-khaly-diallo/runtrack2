<?php
    // boucle de 0 a 1336
    for ( $i = 0 ; $i < 1337 ; $i++) {
        if ( $i == 42 ) {
            //mise en gras et en italique
            echo "<br> <b><u>" . $i . "</u></b>"; 
        } else {
            echo "<br>" . $i;
        }
    }
?>