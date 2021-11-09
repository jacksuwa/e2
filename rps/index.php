<?php
require __DIR__ . '/vendor/autoload.php';


use App\Debug;
use App\MyGame;


$myGame = new MyGame();


// # Each invocation of the `play` method will play and track a new round of player (given move) vs. computer
Debug::dump($myGame->play('heads'));