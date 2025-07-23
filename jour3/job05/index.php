<?php

    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
    $dic = ["consonnes"=>"","vouyelles"=>""];
    $voyelles = ["a","e","i","o","u","y"];

    $voyellesCounter = 0;
    $consonnesCounter = 0;

    $str = str_split($str);
    foreach( $str as $letter) {
        if(in_array(strtolower($letter), $voyelles)) {
            $voyellesCounter ++;
        }else {
            $consonnesCounter ++;
        }
    }
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
            <th>CONSONNES</th>
            <th> VOYELLES</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $consonnesCounter?></td>
                <td> <?php echo $voyellesCounter?> </td>
            </tr>
        </tbody>
    </table>
</body>

</html>