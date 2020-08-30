<?php

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