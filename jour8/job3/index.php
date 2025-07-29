<?php 
    session_start();

    if (isset($_POST["reset"])) {
        unset($_SESSION['names']);
        session_destroy();
    }

    if(!isset($_SESSION['names'])) {
        $_SESSION['names'] = [];
    }

    if(isset($_POST['send']) && !empty($_POST['prenom'])) {
        array_push($_SESSION['names'], $_POST['prenom']);
    }
    
    

    $names = $_SESSION['names'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste de noms</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="prenom" id="">
        <input type="submit" value="send" name="send">
        <input type="submit" value="reset" name="reset">
    </form>
    <?php foreach ($names as $name) { ?>
        <li> <?= $name ?> </li>
    <?php } ?>
</body>
</html>