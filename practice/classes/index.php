<?php

require 'Catalog.php';

$catalog = new Catalog('products.json');


$catalog->getById(9);

var_dump($catalog->searchByName('ee'));

require 'index-view.php';