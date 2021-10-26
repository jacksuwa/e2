<!DOCTYPE html>
<html>

<head>

    <title>Project 1 - Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
</head>

<body>
    <h1>Project 1 - Rock, Paper, Scissors</h1>
    <form method='POST' action='process.php'>
        <input type='radio' id='rock' name='choice' value='rock' checked><label for='rock'>Rock</label>
        <input type='radio' id='paper' name='choice' value='paper'><label for='paper'>Paper</label>
        <input type='radio' id='scissors' name='choice' value='scissors'><label for='scissors'>Scissors</label>
        <button type='submit'>Play</button>

    </form>

    <?php if (isset($results)) { ?>
    <h2>Results</h2>
    The computer chose <?php echo $computer ?>

    You choose <?php echo $choice ?>

    <?php if ($gameResult == 'Computer wins') { ?>
    Computer Won
    <?php } elseif ($gameResult == 'You win') { ?>
    You won
    <?php } else { ?>
    Tie

    <?php } ?>
    <?php } ?>

</body>

</html>