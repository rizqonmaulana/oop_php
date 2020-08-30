<?php

interface productInfo {
    public function getProductInfo();
}

abstract class Product {
    protected   $title,
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
    
    abstract function getInfo();

}

class Book extends Product implements productInfo {
    public $totalPage;

    public function __construct( $title = "Title", $author = "Author", $publisher = "Publisher", 
        $price = 0, $totalPage = 0 ){

        parent::__construct( $title, $author, $publisher, $price );

        $this->totalPage = $totalPage;

    }

    public function getInfo() {
        $str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";

        return $str;
    }

    public function getProductInfo(){
        $str = "Book : ". $this->getInfo() ." - {$this->totalPage} Page.";
        return $str;
    }
}

class Game extends Product implements productInfo {
    public $timeToPlay;

    public function __construct( $title = "Title", $author = "Author", $publisher = "Publisher", 
        $price = 0, $timeToPlay = 0 ){

        parent::__construct( $title, $author, $publisher, $price );

        $this->timeToPlay = $timeToPlay;
    }

    public function getInfo() {
        $str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";

        return $str;
    }

    public function getProductInfo(){
        $str = "Game : ". $this->getInfo() ." ~ {$this->timeToPlay} Hour.";
        return $str;
    }
}

class PrintProductInfo {
    public $productList = array();

    public function addProduct( Product $product ) {
        $this->productList[] = $product;
    }

    public function print() {
        $str = "Product List : <br>";

        foreach( $this->productList as $p) {
            $str .="- {$p->getProductInfo()} <br>";
        }
        return $str;
    }
}

$product1 = new Book("The Subtle Art of Not Giving a F*ck", "Mark Manson", "Gramedia", 150000, 150);

$product2 = new Game("Minecraft", "Markus Persson", "Mojang", 250000, 48);

$printProduct = new PrintProductInfo();
$printProduct->addProduct( $product1 );
$printProduct->addProduct( $product2 );
echo $printProduct->print();
