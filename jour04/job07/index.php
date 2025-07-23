<?php
$largeur = "";
$hauteur = "";

if (isset($_POST['submit'])) {
    $largeur = (int)$_POST['largeur'];
    $hauteur = (int)$_POST['hauteur'];

    echo "<pre>";

    // --- TOIT ---
    for ($i = 1; $i <= $hauteur; $i++) {
        // Espaces pour centrer
        for ($j = 1; $j <= $hauteur - $i; $j++) {
            echo "&nbsp;";
        }

        // Contenu du toit
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            if ($i == 1) {
                echo " ^";
            } elseif ($k == 1) {
                echo "&nbsp;/";
            } elseif ($k == (2 * $i - 1)) {
                echo "\\";
            } elseif ($i == $hauteur) {
                echo "_";
            } else {
                echo "_";
            }
        }
        echo "\n";
    }

    
   // Corps (rectangle)
    for ($i = 0; $i < $hauteur; $i++) {
        echo "|";
        for ($j = 0; $j < $largeur - 2; $j++) {
            echo " ";
        }
        echo "|\n";
    }

    echo "|";
    for ($i = 0; $i < $largeur - 2; $i++) {
        echo "_";
    }
    echo "|\n";

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Maison ASCII</title>
</head>
<body>
    <form method="post">
        <label>Largeur :</label>
        <input type="text" name="largeur" value="<?= htmlspecialchars($largeur) ?>"><br>
        <label>Hauteur :</label>
        <input type="text" name="hauteur" value="<?= htmlspecialchars($hauteur) ?>"><br>
        <input type="submit" name="submit" value="Dessiner la maison">
    </form>
</body>
</html>
