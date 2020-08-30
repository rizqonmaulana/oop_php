<?php

require_once 'App/init.php';

$product1 = new Book("The Subtle Art of Not Giving a F*ck", "Mark Manson", "Gramedia", 150000, 150);

$product2 = new Game("Minecraft", "Markus Persson", "Mojang", 250000, 48);

$printProduct = new PrintProductInfo();
$printProduct->addProduct( $product1 );
$printProduct->addProduct( $product2 );
echo $printProduct->print();