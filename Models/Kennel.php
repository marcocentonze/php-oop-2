<?php

require_once 'Product.php';
require_once './Traits/Color.php';
class Kennel extends Product
{
    use Color;

    public $name_product;
    public $rating;

    function __construct($_name, $_price, $_category, $_name_product, $_rating)
    {
        parent::__construct($_name, $_price, $_category);
        $this->name_product = $_name_product;
        $this->rating = $_rating;
    }
}