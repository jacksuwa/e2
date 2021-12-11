@extends('templates/master')



@section('content')
    <h2>Instructions</h2>
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

    <form method='POST' action='/process'>

        <input type='radio' id='rock' name='choice' value='rock'><label for='rock'>Rock</label>
        <input type='radio' id='paper' name='choice' value='paper'><label for='paper'>Paper</label>
        <input type='radio' id='scissors' name='choice' value='scissors'><label for='scissors'>Scissors</label>

        <button type='submit'>Play</button>
    </form>
@endsection
