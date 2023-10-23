<?php

require __DIR__ . '/../Models/Category.php';
require __DIR__ . '/../Models/Food.php';
require __DIR__ . '/../Models/Kennel.php';
// require __DIR__ . '/../Models/Products.php';
require __DIR__ . '/../Models/Toy.php';

$pet_products = [];


try {
array_push(
    $pet_products,

    $dogFood = new Food('Dog Food', 0, $dog_category, 'High-quality dog food for your furry friend', '2kg'),
    $catFood = new Food('Cat Food', 18.99, $cat_category, 'Delicious cat food for a happy feline', '1.5kg'),
    $squeakyBall = new Toy('Squeaky Ball', 9.99, $dog_category, 'Interactive squeaky ball for hours of fun', 'Small'),
    $featherWand = new Toy('Feather Wand', 6.99, $cat_category, 'Interactive feather wand toy for playful cats', 'Small'),
    $dogKennel = new Kennel('Dog Kennel', 89.99, $dog_category, 'Large', 'Durable plastic'),
    $catKennel = new Kennel('Cat Kennel', 49.99, $cat_category, 'Small', 'Soft fabric')
);
} catch (Exception $e) {
    echo $e->getMessage();
}


//setcolor 
$dogKennel->setColor('Black');
$catKennel->setColor('Red');
