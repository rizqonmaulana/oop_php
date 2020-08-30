<?php

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