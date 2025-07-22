<?php

    //fuzz buzz game
    for ( $i = 1 ; $i < 100 ; $i++) {
        //utiliser modulo pour voir si le nombre est multiple de : ...
        if ( $i % 3 == 0 && $i % 5 == 0 ) {
            echo "FizzBuzz";
        } elseif ( $i % 5 == 0) {
            echo "Buzz";
        }elseif ( $i % 3 == 0 ) {
            echo "Fizz";
        } else {
            echo $i;
        }

        echo "<br>";

    }
?>