<?php

// require 'Catalog.php';

// $catalog = new Catalog('products.json');


// $catalog->getById(9);

// var_dump($catalog->searchByName('ee'));

require 'Person.php';
$person = new Person('John', 'Hardward', 45);
echo  $person->firstName;
echo $person->getFullName();
echo $person->getClaassification();


require 'index-view.php';