<?php

class Product {
    public  $title,
            $author,
            $publisher,
            $price;

    public function __construct( $title = "Title", $author = "Author", $publisher = "Publisher", $price = 0 ) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
    }

    public function getLabel(){
        return "$this->title, $this->author";
    }
}

$product1 = new Product("The Subtle Art of Not Giving a F*ck", "Mark Manson", "Gramedia", 150000);

$product2 = new Product("The Introvert Adavantage", "Marti Laney", "Excelindo", 105000);

$product3 = new Product();

echo "Book : ".$product1->getLabel();
echo "<hr>";
echo "Book : ".$product2->getLabel();
echo "<hr>";
echo "Book : ".$product3->getLabel();