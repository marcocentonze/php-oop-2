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
