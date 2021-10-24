<!DOCTYPE html>
<html>

<head>

    <title>Project 2 - Coin Flip</title>
    <meta charset='utf-8'>



</head>

<body>

    <h1>Project 2 - Coin Flip </h1>

    <form method='POST' action='process.php'>

        <input type='radio' id='heads' name='choice' value='heads'
            <?php echo (!isset($choice) or $choice == 'heads') ? 'checked' : '' ?>><label for='heads'>Heads</label>
        <input type='radio' id='tails' name='choice' value='tails'
            <?php echo (!isset($choice) or $choice == 'tails') ? 'checked' : '' ?>><label for='tails'>Tails</label>


        <button type='submit'>Play</button>
    </form>

    <?php if (isset($results)) { ?>
    <h2>Results</h2>
    The coin landed on <?php echo $flip; ?>


    <?php if ($winner) { ?>
    You won the coin toss!
    <?php } else { ?>
    you lost the, please try again
    <?php } ?>

    <?php } ?>

</body>

</html>