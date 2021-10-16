<?php

class Catalog
{
    #  Properties
    public $products = [];

    #  Methods

    public function __construct($dataSource)
    {
        $json = file_get_contents('products.json');
        $this->products = json_decode($json, true);
    }

    function getAll()
    {
        return $this->products;
    }

    function getById(int $id)
    {

        return $this->products[$id];
    }

    function searchByName(string $term)
    {
        $results = [];
        foreach ($this->products as $product) {
            if (strstr($product['name'], $term)) {
                $results[] = $product;
            }
        }
        return $results;
    }
}