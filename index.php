<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

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
}

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

class Kennel extends Product
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

$pet_products = [
    $dogFood = new Food('Dog Food', '€24.99', $dog_category, 'High-quality dog food for your furry friend', '2kg'),
    $catFood = new Food('Cat Food', '€18.99', $cat_category, 'Delicious cat food for a happy feline', '1.5kg'),
    $squeakyBall = new Toy('Squeaky Ball', '€9.99', $dog_category, 'Interactive squeaky ball for hours of fun', 'Small'),
    $featherWand = new Toy('Feather Wand', '€6.99', $cat_category, 'Interactive feather wand toy for playful cats', 'Small'),
    $dogKennel = new Kennel('Dog Kennel', '€89.99', $dog_category, 'Large', 'Durable plastic'),
    $catKennel = new Kennel('Cat Kennel', '€49.99', $cat_category, 'Small', 'Soft fabric')
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
</head>

<body>
    <header>
        <div class="container-fluid bg-info">
            <h2>Pet Store</h2>
        </div>
    </header>

    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php foreach ($pet_products as $pet_product) : ?>
                <div class="col-3 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center"> <?= $pet_product->name; ?></h1>
                        </div>
                        <img src="<?= $pet_product->img; ?>" class="card-img-top img-thumbnail" alt="">
                        <ul>
                            <li>Category: <?= ($pet_product->category->animal === 'cat') ? '🐱' : '🐶'; ?></li>
                            <li>Details: <?= $pet_product->name_product; ?></li>
                            <?php if (isset($pet_product->weight)) : ?>
                                <li>Weight: <?= $pet_product->weight; ?></li>
                            <?php else : ?>
                                <li>Material: <?= $pet_product->rating; ?></li>
                            <?php endif; ?>
                            <li>Price: <?= $pet_product->price; ?></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>



    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js' integrity='sha384-ZMP7rVo3mI1fQ6H/TU8tV3/s6s5f5fMOPL3g5f5f5zmF5z5zs3f5f5o5z5xZ' crossorigin='anonymous'></script>
</body>

</html>