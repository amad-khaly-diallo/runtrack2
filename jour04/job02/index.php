<?php
       
        $prenom = $_GET['prenom'] ?? "";
        $nom = $_GET['nom'] ?? "";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table {
            border-collapse: collapse;

        }

        table thead {
            background-color: #427680ff;
            color: white;
        }

        th,td {
            padding: 1rem;
            border: 1px solid gray;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #a9c4caff;
        }

    </style>
</head>

<body>

        <form action="" method="get">
            <input type="text" name="prenom" placeholder="votre prenom...">
            <input type="text" name="nom" placeholder="votre nom...">
            <input type="submit" value="envoyer">
        </form>

    <table>
        <thead>
            <th> Arguments</th>
            <th>Valeurs</th>
        </thead>
        <tbody>
            <tr>
                <td> Prenom </td>
                <td> <?php echo $prenom  ?> </td>
            </tr>
             <tr>
                <td> Nom </td>
                <td> <?php echo $nom  ?> </td>
            </tr>
            
        </tbody>
    </table>
</body>

</html>
