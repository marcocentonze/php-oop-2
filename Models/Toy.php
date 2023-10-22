<?php

require_once 'Product.php';
class Toy extends Product
{
    public $name_product;
    public $rating;

    function __construct($_name, $_price, $_category, $_name_product, $_rating)
    {
        parent::__construct($_name, $_price, $_category);
        $this->name_product = $_name_product;
        $this->rating = $_rating;
    }
}