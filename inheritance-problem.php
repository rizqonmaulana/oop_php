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
        $totalPage = 0, $timeToPlay = 0, $type) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
        $this->totalPage = $totalPage;
        $this->timeToPlay = $timeToPlay;
        $this->type = $type;
    }

    public function getLabel(){
        return "$this->author, $this->publisher";
    }

    public function fullProductInfo(){
        $str = "{$this->type} : {$this->title} | {$this->getLabel()} (Rp. {$this->price})";
        if( $this->type == "Book" ) {
            $str .= " - {$this->totalPage} Page.";
        } elseif ( $this->type == "Game" ) {
            $str .= " ~ {$this->timeToPlay} Hours.";
        }
        return $str;
    }
}

class PrintProductInfo {
    public function print( Product $product ) {
        $str = "{$product->title} | {$product->getLabel()} (Rp. {$product->price})";
        return $str;
    }
}

$product1 = new Product("The Subtle Art of Not Giving a F*ck", "Mark Manson", "Gramedia", 150000, 150, 0, "Book");

$product2 = new Product("Minecraft", "Markus Persson", "Mojang", 250000, 0, 48, "Game");

echo $product1->FullProductInfo();
echo "<br>";
echo $product2->FullProductInfo();