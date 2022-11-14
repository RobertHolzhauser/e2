<?php

namespace App;

class Products
{
    #Propertiess
    private $products  = [];

    #Methods
    public function __construct($datasource)
    {
        $json = file_get_contents($datasource);
        $this->products = json_decode($json, true);
    }

    public function getAll()
    {
        return $this->products;
    }

    public function getById(int $id)
    {
        return $this->products[$id] ?? null;
    }

    public function getBySku(string $sku)
    {
        $productId = array_search($sku, array_column($this->products, 'sku', 'id'));
        return $this->getById($productId);
    }
}