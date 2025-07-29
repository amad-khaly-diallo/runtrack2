<?php 
    $style = "";
    if(isset($_POST["submit"])) {
        $style = $_POST["stylesheet"];
    };
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($style): ?>
        <link rel="stylesheet" href="css/<?=$style?>">
    <?php endif; ?>
    <title>dynamique css </title>
</head>

<body>
    <form method="post" action="">
        <label for="style">Choisissez un style :</label>
        <select name="stylesheet" id="style">
            <option value="style1.css"<?= ($style == "style1.css") ? "selected" : "" ?>>style 1</option>
            <option value="style2.css" <?= ($style == "style2.css") ? "selected" : "" ?>>style 2</option>
            <option value="style3.css" <?= ($style == "style3.css") ? "selected" : "" ?>>style 3</option>
        </select>
        <input type="submit" name="submit" value="Envoyer">
    </form>

</body>

</html>