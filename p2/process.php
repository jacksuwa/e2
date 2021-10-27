<?php

session_start();

$choice = $_POST['choice'];

$moves = ['rock', 'paper', 'scissors'];
$computer = $moves[rand(0, 2)];

if ($choice == $computer) {
    $gameResult = 'Tie';
} elseif ($choice == $moves[0] and $computer == $moves[1]) {
    $gameResult = 'Computer wins';
} elseif ($choice == $moves[1] and $computer == $moves[2]) {
    $gameResult = 'Computer wins';
} elseif ($choice ==  $moves[2] and $computer == $moves[0]) {
    $gameResult = 'Computer wins';
} elseif ($choice == $moves[0] and $computer == $moves[2]) {
    $gameResult = 'You win';
} elseif ($choice == $moves[1] and $computer == $moves[0]) {
    $gameResult = 'You win';
} elseif ($choice == $moves[2] and $computer == $moves[1]) {
    $gameResult = 'You win';
}

$_SESSION['results'] = [

    'choice' => $choice,
    'computer' => $computer,
    'gameResult' =>  $gameResult

];

header('Location: index.php');