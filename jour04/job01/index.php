<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire php </title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="name" placeholder="entrer votre nom">
        <input type="submit" value="submit" name="submit">
    </form>

</body>
</html>

<?php
    $input_nombre = count($_GET);
    echo " Le nombre d'argument GET envoyé est:  $input_nombre";