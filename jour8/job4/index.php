<?php

    $prenom = "";

    $checkNameExist = false;

    if (isset($_COOKIE['names']) && $_COOKIE['names'] !== '') {
        $names = explode(',', $_COOKIE['names']);
    } else {
        $names = [];
    }

    // connexion handler
    if (isset($_POST['connexion']) && !empty($_POST["prenom"])) {
        $prenom = trim($_POST["prenom"]);
        if ($prenom !== '') {
            $checkNameExist = (in_array($prenom,explode(',', $_COOKIE['names'])));
            $names[] = $prenom;
            setcookie("names", implode(',', $names), time() + 60*60*24);
        }
    }

    // Deconnexion handler
    if (isset($_POST['deconnexion'])) {
        setcookie('names', "", time() - 3600);
        $names = [];
        $prenom = "";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de connexion</title>
</head>
<body>

    <?php if ($checkNameExist) { ?>
            <h2> bonjour <?=$prenom?> !</h2>
            <form action="" method="post">
                <input type="submit" value="déconnexion" name="deconnexion">
            </form>
    <?php }else{ ?>
        <form action="" method="post">
            <input type="text" name="prenom" >
            <input type="submit" value="connexion" name="connexion"> 
        </form>
    <?php } ?>
    
</body>
</html>