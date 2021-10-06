<!doctype html>
<html lang='en'>

<head>
    <title>Project 1 - Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel="stylesheet" href="styles/p1.css" />
</head>

<body>
    <h1>Rock Paper Scissors Game Simluator</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>
            Player A and Player B select between items: Rock, Paper or Scissors.
        </li>
        <li>
            The game will be a tie if both players select the same item.
        </li>
        <li>
            Otherwise: Rock beats Scissors, Paper beats Rock, and Scissors beats Paper.
        </li>
    </ul>

    <h2>Results</h2>
    <ul>
        <li>Player A threw: <?php echo $playerAMove; ?></li>
        <li>Player B threw: <?php echo $playerBMove; ?></li>
        <li>
            <strong>Winner:</strong> <?php echo $result; ?>
        </li>

    </ul>

</body>


</html>