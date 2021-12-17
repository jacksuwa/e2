@extends('templates/master')

@section('content')
    <a href='/history'> Game History</a>

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

        <input type='radio' test='rock-radio' id='rock' name='choice' value='rock'><label for='rock'>Rock</label>
        <input type='radio' test='paper-radio' id='paper' name='choice' value='paper'><label for='paper'>Paper</label>
        <input type='radio' test='scissors-radio' id='scissors' name='choice' value='scissors'><label
            for='scissors'>Scissors</label>

        <button test='submit-button' type='submit'>Play</button>
    </form>

    @if ($app->errorsExist())
        <ul test='validation-output' class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if ($choice)
        <div test='results-div' class='results'>Computer chose <span test='computer-choice'>{{ $computer }}</span>. You
            chose <span test='player-choice'> {{ $choice }}</span>.

            @if ($result == 'won')
                <span test='won-output' class='won'> You won!!! </span>
            @elseif ($result == 'tie')
                <span test='tie-output' class='tie'> Tie, Please play again </span>
            @else
                <span test='lost-output' class='lost'> You lost. Play again. </span>
            @endif
        </div>

    @endif

@endsection
