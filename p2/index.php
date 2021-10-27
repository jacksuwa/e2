<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $choice = $results['choice'];
    $computer = $results['computer'];
    $gameResult = $results['gameResult'];


    $_SESSION['results'] = null;
}

require 'index-view.php';