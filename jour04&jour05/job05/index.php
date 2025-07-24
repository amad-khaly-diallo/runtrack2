
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])) {
        if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
            echo "C'est pas ma guerre";
        }else {
            echo "Votre pire cauchemar";
        }
    }

?>