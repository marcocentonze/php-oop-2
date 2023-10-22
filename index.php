<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);



require __DIR__ . '/Database/db.php';


?>

<!-- head -->
<?php include __DIR__ . '/Layout/head.php' ?>

<!-- header -->
<?php include __DIR__ . '/Layout/partials/header.php' ?>

<!-- main -->
<?php include __DIR__ . '/Layout/partials/main.php' ?>

<!-- footer -->
<?php include __DIR__ . '/Layout/partials/footer.php' ?>

<!-- foot -->
<?php include __DIR__ . '/Layout/foot.php' ?>