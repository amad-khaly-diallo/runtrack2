<?php 
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
    $bullshit = "";

    for ( $i = 0 ; $i <= strlen($str); $i+=2){
        $bullshit .= $str[$i];
    }

    echo $bullshit;


?>