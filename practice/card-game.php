<?php
$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];



//$playerCards = array_splice($cards, 0, count($cards) / 2);
//$computerCards = $cards;
//You will likely (but are not required to) use a combination of a foreach and if construct.
//var_dump($playerCards);
//var_dump($computerCards);

foreach ($cards as $card) {
    shuffle($cards);
    if (count($cards) != 0) {
        $playerCards = array_shift($cards);
        $computerCards = array_shift($cards);
        var_dump("player1");
        var_dump($playerCards);
        var_dump("computerCard");
        var_dump($computerCards);
    }
}
// $total = rand(0, 100);
// var_dump($total);

// var_dump($total <= 30 or $total > 50);
// var_dump($ansL);

// var_dump(1 == 1 && 5 < 2);