<!DOCTYPE html>
<html>

<head>

    <title>Project 2 - Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="styles/p2.css" />
</head>

<body>
    <h1>Project 2 - Rock, Paper, Scissors</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>
            Player A (You) and Player B (Computer) select between items: Rock, Paper or Scissors.
        </li>
        <li>
            The game will be a tie if both players select the same item.
        </li>
        <li>
            Otherwise: Rock beats Scissors, Paper beats Rock, and Scissors beats Paper.
        </li>
    </ul>

    <img alt='Rock, Paper, Scissors' src='images/rock-paper-scissor.png'>


    <form method='POST' action='process.php'>
        <input type='radio' id='rock' name='choice' value='rock'
            <?php echo (!isset($choice) or $choice == 'rock') ? 'checked' : '' ?>><label for='rock'>Rock</label>
        <input type='radio' id='paper' name='choice' value='paper'
            <?php echo (isset($choice) and $choice == 'paper') ? 'checked' : '' ?>><label for='paper'>Paper</label>
        <input type='radio' id='scissors' name='choice' value='scissors'
            <?php echo (isset($choice) and $choice == 'scissors') ? 'checked' : '' ?>><label
            for='scissors'>Scissors</label>
        <button type='submit'>Play</button>

    </form>

    <?php if (isset($results)) { ?>
    <h2>Results</h2>
    <ul>
        <li>You threw: <?php echo $choice; ?></li>
        <li>Computer threw: <?php echo $computer; ?></li>
        <li>
            <strong>Game result:</strong> <?php echo $gameResult; ?>
        </li>

    </ul>
    <?php } ?>

</body>

</html>