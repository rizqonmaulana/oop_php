<?php

spl_autoload_register(function( $class ){
    //  App\Product\User = ["App", "Product", "User"]
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Product/' . $class . '.php';
});

spl_autoload_register(function( $class ){
    //  App\Service\User = ["App", "Product", "User"]
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Service/' . $class . '.php';
});