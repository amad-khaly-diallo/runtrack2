<?php 
    // les nombres premiers
    for ( $i = 0 ; $i < 1000 ; $i++) {
        //un coumpteur qui s'incrémante dans la boucle quand on a un diviseur de i
        $counter = 0;
        for ( $j = 1 ; $j <= $i; $j++) {
            if ( $i % $j == 0) {
                $counter ++;
            }
        }
        // si le compteur est égal a deux alors il est premier
        if ($counter == 2) {
            echo $i . "<br>";
        }
    }

?>