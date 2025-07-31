<?php
include_once("../connect_DB.php");
try {
    $sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        throw new Exception('Erreur : ' . mysqli_error($conn));
    }


    $capacite = mysqli_fetch_assoc($result);

} catch (Exception $e) {
    echo "une erreur est survenu : " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
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
            background-color: white;
        }

        thead {
            background-color: #427680ff;
            color: white;
        }

        th, td {
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
    <?php if (count($capacite) > 0): ?>
        <table>
            <thead>
                <tr>
                    <?php foreach ( $capacite as $index => $value): ?>
                        <th><?= htmlspecialchars($index) ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <?php foreach ($capacite as $value): ?>
                            <td><?= htmlspecialchars($value) ?></td>
                        <?php endforeach; ?>
                    </tr>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucun étudiant trouvé.</p>
    <?php endif; ?>
</body>
</html>
