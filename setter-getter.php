<?php

class Product {
    private  $title,
            $author,
            $publisher,
            $price,
            $discount;

    public function __construct( $title = "Title", $author = "Author", $publisher = "Publisher", $price = 0 ) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setAuthor($author){
        $this->author = $author;
    } 

    public function getAuthor(){
        return $this->author;
    }

    public function setPublisher($publisher){
        $this->publisher = $publisher;
    }

    public function getPublisher(){
        return $this->publisher;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price - ( $this->price * $this->discount / 100 );
    }

    public function getLabel(){
        return "$this->author, $this->publisher";
    }

    public function setDiscount( $discount ) {
        $this->discount = $discount;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function getProductInfo(){
        $str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
        return $str;
    }
}

class Book extends Product {
    public $totalPage;

    public function __construct( $title = "Title", $author = "Author", $publisher = "Publisher", 
        $price = 0, $totalPage = 0 ){

        parent::__construct( $title, $author, $publisher, $price );

        $this->totalPage = $totalPage;

    }

    public function getProductInfo(){
        $str = "Book : ". parent::getProductInfo() ." - {$this->totalPage} Page.";
        return $str;
    }
}

class Game extends Product {
    public $timeToPlay;

    public function __construct( $title = "Title", $author = "Author", $publisher = "Publisher", 
        $price = 0, $timeToPlay = 0 ){

        parent::__construct( $title, $author, $publisher, $price );

        $this->timeToPlay = $timeToPlay;
    }

    public function getProductInfo(){
        $str = "Game : ". parent::getProductInfo() ." ~ {$this->timeToPlay} Hour.";
        return $str;
    }
}

class PrintProductInfo {
    public function print( Product $product ) {
        $str = "{$product->title} | {$product->getLabel()} (Rp. {$product->price})";
        return $str;
    }
}

$product1 = new Book("The Subtle Art of Not Giving a F*ck", "Mark Manson", "Gramedia", 150000, 150);

$product2 = new Game("Minecraft", "Markus Persson", "Mojang", 250000, 48);

echo $product1->getProductInfo();
echo "<br>";
echo $product2->getProductInfo();
echo "<hr>";
$product2->setDiscount(50);
echo $product2->getPrice();
echo "<hr>";
echo $product1->getAuthor();