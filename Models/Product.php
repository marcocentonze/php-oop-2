<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $img = 'https://picsum.photos/100/100';

    function __construct($_name, $_price, $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function setPrice($_price) {
        if ($_price < 0) {
            throw new Exception('Il prodotto non è al momento disponibile!');
        }
        $this->price = $_price;
    }

}