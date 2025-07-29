<?php 
    if (isset($_POST['reset'])) {
        setcookie('nbvisites', "", time() - 3600);
        $visites = 0;
    }
    elseif(isset($_COOKIE['nbvisites'])) {
        $visites = $_COOKIE['nbvisites'] + 1;
    }else {
        $visites = 1;
    }

    setcookie('nbvisites', $visites, time() + 60*60*24);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>vous avez visiter cette pages <?= $visites ?> fois</h2>
    <form action="" method="post">
        <input type="submit" value="submit" name="reset">
    </form>
</body>
</html>
