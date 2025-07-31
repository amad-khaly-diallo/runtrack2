<?php 
    include("../connect_DB.php");

    try {
        $result = mysqli_query($conn, "SELECT * FROM etudiants");

        if (!$result) {
            throw new Exception("Erreur de requête : " . mysqli_error($conn));
        }

        $allStudents = [];

        while ($row = mysqli_fetch_assoc($result)) {
           $allStudents[] = $row;
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
    <?php if (count($allStudents) > 0): ?>
        <table>
            <thead>
                <tr>
                    <?php foreach (array_keys($allStudents[0]) as $column): ?>
                        <th><?= htmlspecialchars($column) ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allStudents as $student): ?>
                    <tr>
                        <?php foreach ($student as $value): ?>
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
