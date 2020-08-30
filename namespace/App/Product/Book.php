<?php

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