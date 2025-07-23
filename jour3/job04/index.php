<?php
    $str = "Dans lespace, personne ne vous entend crier";

    // premiere methode 

    /*$counter = 0 ;
   for ($i = 0; $i < strlen($str); $i++) {
        $counter ++;
   }
   echo $counter;*/




   // deuxieme méthode

    $counter = 0;
   $tableau = str_split($str);
   foreach($tableau as $index => $lettre) {
        echo $lettre . "=>" . $index + 1 . "<br>";
        $counter ++;
   }
   echo $counter;
   