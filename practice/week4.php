<?php
# Define an array of strings
#           0       1         2
$moves = ['rock', 'paper', 'scissors'];

$randomNumber = rand(0, 2);

//var_dump($randomNumber);

$moves = $moves[$randomNumber];

//var_dump($moves);


$coin_values = [
    'penny' => .01,
    'nickel' => .05,
    'dime' => .10,
    'quarter' => .25,
];



$coin_counts = [
    'penny' => 100,
    'nickel' => 25,
    'dime' => 100,
    'quarter' => 34,
];




//asort($coin_counts);

//arsort($coin_counts);

//ksort($coin_counts);

//var_dump($coin_counts);


// $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// shuffle($cards);

//var_dump($cards);

$total = 0;

$coins = [
    'penny' =>  [
        'count' => 100,
        'value' => .01
    ],
    'nickel' => [
        'count' => 25,
        'value' => .05
    ],
    'dime' => [
        'count' => 100,
        'value' => .10
    ],
    'quarter' => [
        'count' => 34,
        'value' => .25
    ],
    'halfDollar' => [
        'count' => 10,
        'value' => .50
    ]
];

// foreach ($coin_counts as $coin => $count) {
//     $total = $total + ($count * $coin_values[$coin]);
// }

// foreach ($coins as $coin => $info) {

//     $total = $total + ($info[$count] * $info[$value]);
// }

// var_dump($total);

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
shuffle($cards);
$playerCards = array_splice($cards, 0, count($cards) / 2);

$computerCards = $cards;
// var_dump($playerCards);

// $playerDraw = $playerCards[count($playerCards) - 1];
$playerDraw = array_pop($playerCards);
// var_dump($playerCards);
// var_dump($playerDraw);

// var_dump(date('F j Y',));

// var_dump(strtoupper('aBDYHNbcdYD'));

$coin = ['heads', 'tails'];
$randomNumber = rand(0, 1);
$player1Choice = $coin[$randomNumber];


$randomNumber = rand(0, 1);
$flip = $coin[$randomNumber];

// var_dump($player1Choice);
// var_dump($player2Choice);

if ($player1Choice == $flip) {
    // var_dump('Player 1 Wins!');
} else {
    //var_dump('Player 1 lost :(');
}

$moves = ['rock', 'paper', 'scissors'];
$player1Move = $moves[rand(0, 2)];
$player2Move = $moves[rand(0, 2)];

// var_dump($player1Move);
// var_dump($player2Move);

if ($player1Move == $player2Move) {
    //var_dump('Tie');
} elseif ($player1Move == 'rock' and $player2Move == 'paper') {
    //var_dump('Player 2 Wins');
} elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
    // var_dump('Player 1 Wins');
}

/*----------------------------------------------------
Week 4, Part 4 Loops
-----------------------------------------------------*/
# Count from 0-10 using a foreach loop
$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// foreach ($numbers as $key => $number) {
//var_dump($number);
// }

// for ($i = 0; $i <= 10; $i++) {
//     var_dump($i);
// }

// $i = 0;

// while ($i < 20) {
//     var_dump($i);
//     $i++;
// }
$answer = 5;
$guess = null;

while ($guess != $answer) {
    $guess = rand(0, 10);
    var_dump('Guess:' . $guess);
}