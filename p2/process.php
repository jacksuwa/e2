<?php

$choice = $_POST['choice'];


$moves = ['rock', 'paper', 'scissors'];
$computer = $moves[rand(0, 2)];


if ($choice == $moves[0] and $computer == $moves[1]) {
    var_dump($choice);
    var_dump($computer);
    var_dump('Computer wins :(');
} elseif ($choice == $moves[0] and $computer == $moves[2]) {
    var_dump($choice);
    var_dump($computer);
    var_dump('You win!');
} elseif ($choice == $moves[0] and $computer == $moves[0]) {
    var_dump($choice);
    var_dump($computer);
    var_dump('Tis a tie!');
}