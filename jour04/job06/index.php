
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="number" placeholder="entrer un nombre">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
    if(isset($_GET['submit'])) {
        if ($_GET['number'] % 2 == 0 ) {
            echo "<br/>Nombre pair";
        }else {
            echo "<br/>Nombre impair";
        }
    }

?>