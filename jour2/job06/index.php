<?php

$largeur = 20;
$hauteur = 10;

//boucle pour les lignes(hauteur) du rectangle
for ($i = 1; $i <= $hauteur; $i++) {
    // boucle pour les colonnes(largeur)
    for ($j = 1; $j <= $largeur; $j++) {
        //condition pour afficher ou cacher les étoiles
        if ($i == 1 || $i == $hauteur) {
            echo "* ";
        } elseif ($j == 1 || $j == $largeur ) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp; ";
        }
    }
    echo "<br>";
};
?>
