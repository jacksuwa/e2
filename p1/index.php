<?php
#Rock, Paper, Scissors Game

$moves = ['Rock', 'Paper', 'Scissors'];
$playerAMove = $moves[rand(0, 2)];
$playerBMove = $moves[rand(0, 2)];

//create a variable to store result
$result = "";

//Compare the element selected by Player A and Player B and decide the winner or tie
if ($playerAMove == $playerBMove) {
    $result = 'Tie';
} elseif ($playerAMove == 'Rock' and $playerBMove == 'Paper') {
    $result = 'Player B';
} elseif ($playerAMove == 'Rock' and $playerBMove == 'Scissors') {
    $result = 'Player A';
} elseif ($playerAMove == 'Paper' and $playerBMove == 'Rock') {
    $result = 'Player A';
} elseif ($playerAMove == 'Paper' and $playerBMove == 'Scissors') {
    $result = 'Player B';
} elseif ($playerAMove == 'Scissors' and $playerBMove == 'Paper') {
    $result = 'Player A';
} elseif ($playerAMove == 'Scissors' and $playerBMove == 'Rock') {
    $result = 'Player B';
}

require 'index-view.php';