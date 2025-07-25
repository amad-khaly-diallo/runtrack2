<?php
// decalage de césar j'ai utilié le $ord() et le ctype()
$cesar = function ($str, $decalage) {
    $result = '';

    foreach (str_split($str) as $char) {
        if (ctype_lower($char)) {
            $base = ord('a');
            $result .= chr(($ord = ord($char) - $base + $decalage) % 26 + $base);
        } elseif (ctype_upper($char)) {
            $base = ord('A');
            $result .= chr(($ord = ord($char) - $base + $decalage) % 26 + $base);
        } else {
            $result .= $char;
        }
    }

    return $result;
};

// mettre le text en gras j'ai utiliser du regex 

$gras = function($str) {
    preg_match_all('/\b[A-Z][a-zA-Z]*\b/', $str, $matches);
    $majuscules = $matches[0];
    $mots = explode(' ', $str);

    foreach ($mots as &$mot) {
        $motNettoye = rtrim($mot, ".,!?;:");
        if (in_array($motNettoye, $majuscules)) {
            $mot = "<strong>$mot</strong>";
        }
    }

    return implode(' ', $mots);
};

//mettre du "_" devant chaque mot finissant par me
$plateforme = function ($str) {
    return preg_replace('/\b(\w*me)\b/u', '$1_', $str);
};

$modified = '';

if (isset($_POST['submit'])) {
    $str = $_POST['str'];
    $decalage = 3;

    if (isset($_POST['options'])) {
        switch ($_POST['options']) {
            case 'gras':
                $modified = $gras($str);
                break;
            case 'cesar':
                $modified = $cesar($str, $decalage);
                break;
            case 'plateforme':
                $modified = $plateforme($str);
                break;
            default:
                $modified = "Vous n'avez rien choisi.";
                break;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>job 07</title>
</head>
<body>
    <form action="" method="post">
        <label for="str">Entrez une phrase :</label>
        <input type="text" name="str" id="str" required>

        <label for="effets">Choisissez un effet :</label>
        <select name="options" id="effets" required>
            <option value="" disabled selected>-- Choisissez un effet --</option>
            <option value="gras">Mettre en gras</option>
            <option value="cesar">Décalage César</option>
            <option value="plateforme">Plateforme</option>
        </select>

        <button type="submit" name="submit">Appliquer</button>
    </form>

    <?php if (!empty($modified)): ?>
        <div class="result">
            <strong>Résultat :</strong>
            <p><?= $modified ?></p>
        </div>
    <?php endif; ?>

</body>
</html>
