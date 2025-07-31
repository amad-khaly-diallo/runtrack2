<?php
include_once("../connect_DB.php");
try {
    $sql = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        throw new Exception('Erreur : ' . mysqli_error($conn));
    }

    $agesInterval = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $agesInterval[] = $row;
    }

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
    <title>1998 - 2018</title>
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
    <?php if (count($agesInterval) > 0): ?>
        <table>
            <thead>
                <tr>
                    <?php foreach (array_keys($agesInterval[0]) as $column): ?>
                        <th><?= htmlspecialchars($column) ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agesInterval as $name): ?>
                    <tr>
                        <?php foreach ($name as $value): ?>
                            <td><?= htmlspecialchars($value) ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucun étudiant trouvé.</p>
    <?php endif; ?>
</body>
</html>