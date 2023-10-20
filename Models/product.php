
<?php

class Product
{
    public $name;
    public $description;
    public $image;
    public $price;


    # construct function
    function __construct($_name, $_description, $_image, $_price)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->image = $_image;
        $this->price = $_price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }
    #Get functions
    public function getImage()
    {
        return $this->image;
    }


    public function getPrice()
    {
        return $this->price;
    }
}