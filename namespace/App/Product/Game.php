<?php

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