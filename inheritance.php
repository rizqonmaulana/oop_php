<?php

class Product {
    public  $title,
            $author,
            $publisher,
            $price,
            $totalPage,
            $timeToPlay,
            $type;

    public function __construct( $title = "Title", $author = "Author", $publisher = "Publisher", $price = 0, 
        $totalPage = 0, $timeToPlay = 0) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
        $this->totalPage = $totalPage;
        $this->timeToPlay = $timeToPlay;
    }

    public function getLabel(){
        return "$this->author, $this->publisher";
    }

    public function getProductInfo(){
        $str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
        return $str;
    }
}

class Book extends Product {
    public function fullProductInfo(){
        $str = "Book : {$this->getProductInfo()} - {$this->totalPage} Page.";
        return $str;
    }
}

class Game extends Product {
    public function fullProductInfo(){
        $str = "Game : {$this->getProductInfo()} - {$this->timeToPlay} Hour.";
        return $str;
    }
}

class PrintProductInfo {
    public function print( Product $product ) {
        $str = "{$product->title} | {$product->getLabel()} (Rp. {$product->price})";
        return $str;
    }
}

$product1 = new Book("The Subtle Art of Not Giving a F*ck", "Mark Manson", "Gramedia", 150000, 150, 0);

$product2 = new Game("Minecraft", "Markus Persson", "Mojang", 250000, 0, 48);

echo $product1->FullProductInfo();
echo "<br>";
echo $product2->FullProductInfo();