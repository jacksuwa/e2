<?php

//need to update section
session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $computer = $results['computer'];
    $choice = $results['choice'];
    $gameResult = $results['gameResult'];

    var_dump($computer);
    var_dump($choice);
    var_dump($gameResult);
}


require 'index-view.php';