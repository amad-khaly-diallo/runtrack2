<?php 
    include("../connect_DB.php");
    try {
        $result = mysqli_query($conn, "SELECT prenom, nom, naissance FROM etudiants
        WHERE sex = 'Femme' ");
        if(!$result) {
            throw new Exception("erreur : " . mysqli_error($conn));
        }
        $femmes = [];
        while ($ligne = mysqli_fetch_assoc($result)) {
            $femmes[] = $ligne;
        }

    } catch (Exception $e) {
        echo "Une erreur est survenue : " . $e->getMessage();
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
    <?php if (count($femmes) > 0): ?>
        <table>
            <thead>
                <tr>
                    <?php foreach (array_keys($femmes[0]) as $column): ?>
                        <th><?= htmlspecialchars($column) ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($femmes as $femme): ?>
                    <tr>
                        <?php foreach ($femme as $value): ?>
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