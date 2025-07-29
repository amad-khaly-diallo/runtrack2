<?php
session_start(); 

//la premiere fois sur la page ou apres reset
if (!isset($_SESSION['grilles'])) {
    $_SESSION['grilles'] = array_fill(0, 9, "-");
    $_SESSION['tour'] = "X";
}

// verifier que la case est cliqué et n'est pas coché
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    if ($_SESSION["grilles"][$index] === "-") {
        $_SESSION["grilles"][$index] = $_SESSION['tour'];
        $_SESSION["tour"] = ($_SESSION['tour'] === "X") ? "O" : "X";
    }
}

$grilles = $_SESSION['grilles'];

function checkWinner($grilles) {
    $wins = [
        [0,1,2], [3,4,5], [6,7,8], // rows
        [0,3,6], [1,4,7], [2,5,8], // columns
        [0,4,8], [2,4,6]           // diagonals
    ];
    foreach ($wins as $line) {
        if (
            $grilles[$line[0]] !== '-' &&
            $grilles[$line[0]] === $grilles[$line[1]] &&
            $grilles[$line[1]] === $grilles[$line[2]]
        ) {
            return $grilles[$line[0]]; // "X" or "O"
        }
    }
    return false;
}

$winner = checkWinner($grilles);


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TIK-TOK-TOE</title>
</head>

<body>
    <div class="game-display">
        
        <?php if (!$winner): ?>
            <h2>Tour : <?= $_SESSION['tour'] ?></h2>
            <table>
                <tr>
                    <?php for ($i = 0; $i < 9; $i++): ?>
                        <?php if ($i % 3 === 0 && $i !== 0) echo "</tr><tr>"; ?>
                        <td>
                            <?php if ($grilles[$i] === '-'): ?>
                                <form method="post" style="margin:0;">
                                    <input type="hidden" name="index" value="<?= $i ?>">
                                    <input type="submit" style="scale: 3.5;" value="-">
                                </form>
                            <?php else: ?>
                                <?= $grilles[$i] ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            </table>
        <?php else: ?>
                <h2>Le gagnant est : <?= $winner ?></h2>
        <?php endif; ?>
            <form method="post" style="margin-top:10px;">
                <button type="submit" name="reset" value="1">reset</button>
            </form>
        <?php
        // Reset the game if requested
            if (isset($_POST['reset'])) {
                $_SESSION['grilles'] = array_fill(0, 9, "-");
                $_SESSION['tour'] = "X";
                header("Location: index.php");
                exit;
            }
        ?>
</div>
</body>
</html>  