<?php

//var_dump($playerCards);
//var_dump($computerCards);

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

$playerCards = [];
$computerCards = [];


foreach ($cards as $key => $card) {
    $cardToDeal = array_pop($cards);

    if ($key % 2 == 0) {
        $playerCards[] = $cardToDeal;
    } else {
        $computerCards[] = $cardToDeal;
    }
}

var_dump($playerCards);
var_dump($computerCards);