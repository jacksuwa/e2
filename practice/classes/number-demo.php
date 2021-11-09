<?php


require 'Number.php';
require 'EvenNumber.php';
require 'Debug.php';

use HES\Number;
use HES\EvenNumber;
use HES\Debug;

$example1 = new Number(10);
$example2 = new EvenNumber(10);

// var_dump($example1->isValid());
// var_dump($example2->isValid());

Debug::dump(['a', 'b', ['q', 's', 't']]);