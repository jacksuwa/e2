<?php

session_start();

$answer = $_POST['answer'];

$word = $_SESSION['word'];

$haveAnswer = true;


if ($answer == '') {
    $haveAnswer = false;
} elseif ($answer == $word) {
    $correct = true;
} else {
    $correct = false;
}


$_SESSION['results'] = [
    'haveAnswer' => $haveAnswer,
    'correct' => $correct
];

//var_dump($_SESSION);

header('Location: index.php');