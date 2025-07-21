<?php
//boolean
$bool = true; // or false;
// entier 
$age = 25; // [0, 9];
// char
$char = "je suis une chaine de caractere"; // [a, z];
// virgule flottante
$decimal = 876.543;
// array
$fruits = ["orange", "banane", "kiwi"]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f3f8f9ff;
        }

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
    <table>
        <thead>
            <th> TYPES</th>
            <th>NOMS</th>
            <th>VALEURS</th>
        </thead>
        <tbody>
            <tr>
                <td>Bool ( booléen )</td>
                <td> $bool </td>
                <td> true / false </td>
            </tr>
            <tr>
                <td>float ( nbr decimal ) </td>
                <td> $prix </td>
                <td> <?php echo $decimal; ?> </td>
            </tr>
            <tr>
                <td>int ( entier ) </td>
                <td> $age </td>
                <td> <?php echo $age; ?> </td>
            </tr>
            <tr>
                <td>char ( chaine de caracteres) </td>
                <td> $phrase </td>
                <td> <?php echo $char; ?> </td>
            </tr>
            <tr>
                <td> array ( tableau) </td>
                <td> $fruits </td>
                <td> <?php echo $fruits[0]; ?> </td>
            </tr>
        </tbody>
    </table>
</body>

</html>