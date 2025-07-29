<?php 
    session_start();
    if( !isset($_POST['reset']) )  {
        if( isset($_SESSION['nbvisites']) ) {
            $_SESSION["nbvisites"] ++;
        }
        else {
            $_SESSION["nbvisites"] = 1;
        }
        $visites = $_SESSION['nbvisites'];
    }else {
        unset( $_SESSION['visites'] );
        $visites = 0;
        session_destroy();
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>vous avez visiter cette pages <?= $visites?> fois</h2>
    <form action="" method="post">
        <input type="submit" value="submit" name="reset">
    </form>
</body>
</html>
