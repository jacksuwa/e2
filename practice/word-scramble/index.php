<?php

session_start();

$words = [
    'evidence' => 'A discovery that helps solve a crime',
    'ponder' => 'To think carefully about something',
    'locate' => 'Discover the exact place or position of something or someon
e',
    'abridge' => 'to shorten by leaving out some parts',
    'regulate' => 'to make rules or laws that control something',
    'modest' => 'not overly proud or confident',
    'impromptu' => 'not prepared ahead of time',
    'stint' => 'a period of time spent at a particular activity',
    'tranquil' => 'free from disturbance or turmoil',
    'mutiny' => 'a turning of a group against a person in charge'
];

$useNewWord = true;
$lastWord = '';



//extract session data only if result exit
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $haveAnswer = $results['haveAnswer'];
    $correct = $results['correct'];
    $lastWord = $_SESSION['word'];

    $useNewWord = $correct;


    $_SESSION['results'] = null;
}



if ($useNewWord) {
    //iterate through items on you find a unique value 
    while (!isset($word) or $word == $lastWord) {
        $word = array_rand($words);
    }
} else {
    $word = $lastWord;
}

$_SESSION['word'] =  $word;

$hint = $words[$word];
$wordScramble = str_shuffle($word);

require 'index-view.php';