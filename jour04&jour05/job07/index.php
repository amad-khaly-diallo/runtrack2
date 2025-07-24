<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maison ASCII</title>
</head>
<body>
    <h2>🏠 Générateur de Maison ASCII</h2>
    <form method="post">
        <label for="largeur">Largeur de la maison (impair ≥ 3) :</label>
        <input type="number" name="largeur" id="largeur" min="3" required><br><br>

        <label for="hauteur">Hauteur des murs :</label>
        <input type="number" name="hauteur" id="hauteur" min="2" required><br><br>

        <input type="submit" name="submit" value="Construire">

    </form>

<?php
function dessinerMaison($largeur, $hauteur) {
    echo "<pre>";

    // Assurer une largeur impaire (sinon le toit sera désaligné)
    if ($largeur % 2 === 0) {
        $largeur += 1;
    }

    $milieu = floor($largeur / 2);

    
    for ($i = 0; $i <= $milieu; $i++) {
        $espaces = str_repeat(" ", $milieu - $i);
        $traits = str_repeat("-", $i * 2);
        echo $espaces . "/" . $traits . "\\" . "\n";
    }

   
    for ($i = 0; $i < $hauteur; $i++) {
        echo "|" . str_repeat(" ", $largeur - 2) . "|\n";
    }

    echo str_repeat("-", $largeur ) . "\n";

    echo "</pre>";
}

// 👇 Traitement du formulaire
if (isset($_POST["submit"])) {
    $largeur = intval($_POST["largeur"]);
    $hauteur = intval($_POST["hauteur"]);

    if ($largeur >= 3 && $hauteur >= 2) {
        dessinerMaison($largeur, $hauteur);
    } else {
        echo "<p style='color:red;'>Largeur ≥ 3 et hauteur ≥ 2 requises.</p>";
    }
}
?>
</body>
</html>

