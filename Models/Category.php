<?php


class Category
{
    public $animal;

    function __construct($_animal)
    {
        $this->animal = $_animal;
    }
}

$dog_category = new Category('dog');
$cat_category = new Category('cat');