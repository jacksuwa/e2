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

//Solutions
//VARIATION 1
// $dealTo = 'player'; //like a cursor to remember where we are
// foreach ($cards as $key => $card) {
//     if ($dealTo == 'player') {
//         $playerCards[] = array_pop($cards); //keep tracks of the card in array
//         $dealTo = 'computer'; //after the first iteration it dealTo is change to computer
//     } else {
//         $computerCards[] = array_pop($cards); //thus skiping the if statement in the next iteration
//         $dealTo = 'player'; //and running the else clause and then toggles to computer
//     }
// }
# VARIATION 2 - modulo operator
# Ref: https://www.php.net/manual/en/language.operators.arithmetic.php
// foreach($cards as $key => $card) {
//     if($key % 0 == 0) { //using the mod operator to switch back and forth 
//         $playerCards[] = array_pop($cards);
//     } else {
//         $computerCards[] = array_pop($cards);
//     }
// }
# VARIATION 3 - Popping the dealt card before the loop
// foreach ($cards as $key => $card) {
//     $cardToDeal = array_pop($cards); // this is processed before the if statemet

//     if ($key % 2 == 0) { //everytime switching by two through a loop
//         $playerCards[] = $cardToDeal; //modules operator is a good technique to use
//     } else {
//         $computerCards[] = $cardToDeal;
//     }
// }

# VARIATION 4 - Dynamic variables
// foreach ($cards as $key => $card) {
//     if ($key % 2 == 0) {
//         $dealTo = 'playerCards'; 
//     } else {
//         $dealTo = 'computerCards';
//     }

//     # Dynamic variables : https://www.php.net/manual/en/language.variables.variable.php
//     $$dealTo[] = array_pop($cards); //most of the processing is done here. Switching using double variable 
// }

# VARIATION 5 - Using a while loop
// $dealTo = 'player';
// while (count($cards) > 0) { //using the built in count function to tranverse the array 
//     if ($dealTo == 'player') {
//         $playerCards[] = array_pop($cards);
//         $dealTo = 'computer';
//     } else {
//         $computerCards[] = array_pop($cards);
//         $dealTo = 'player';
//     }
// }