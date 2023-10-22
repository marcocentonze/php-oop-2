<?php
require_once 'Product.php';
class Food extends Product
{
    public $name_product;
    public $weight;

    function __construct($_name, $_price, $_category, $_name_product, $_weight)
    {
        parent::__construct($_name, $_price, $_category);
        $this->name_product = $_name_product;
        $this->weight = $_weight;
    }
}

