<?php

session_start();

$choice = $_POST['choice'];


$moves = ['rock', 'paper', 'scissors'];
$computer = $moves[rand(0, 2)];


if ($choice == $moves[0] and $computer == $moves[1]) {
    $gameResult = 'Computer wins';
} elseif ($choice == $moves[0] and $computer == $moves[2]) {
    $gameResult = 'You win';
} elseif ($choice == $moves[0] and $computer == $moves[0]) {
    $gameResult = 'Tis a tie';
} elseif ($choice == $moves[1] and $computer == $moves[0]) {
    $gameResult = 'You win';
} elseif ($choice == $moves[1] and $computer == $moves[2]) {
    $gameResult = 'Computer wins';
} elseif ($choice == $moves[1] and $computer ==  $moves[1]) {
    $gameResult = 'Tis a tie';
}

$_SESSION['results'] = [

    'computer' => $computer,
    'choice' => $choice,
    'gameResult' =>  $gameResult

];

header('Location: index.php');