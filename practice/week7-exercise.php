<?php

function vowelCount($word)
{
    $totalVowel = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];


    for ($i = 0; $i < strlen($word); $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($word[$i] == $vowels[$j]) {
                $totalVowel++;
            }
        }
    }
    return $totalVowel;
}

var_dump(vowelCount('apple'));
var_dump(vowelCount('lynx'));
var_dump(vowelCount('hi'));
var_dump(vowelCount('mississippi'));