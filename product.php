<?php

class Product {
    public  $title = "title",
            $author = "author",
            $publisher = "publisher",
            $price = "0";

    public function getLabel(){
        return "$this->title, $this->author";
    }
}

$product1 = new Product();
$product1->title = "The Subtle Art of Not Giving a F*ck";
$product1->author = "Mark Manson";
$product1->publisher = "Gramedia";
$product1->price = "150000";

$product2 = new Product();
$product2->title = "The Introvert Advantage";
$product2->author = "Marti Laney";
$product2->publisher = "Excelindo";
$product2->price = "95000";

echo "Book : ".$product1->getLabel();
echo "<hr>";
echo "Book : ".$product2->getLabel();