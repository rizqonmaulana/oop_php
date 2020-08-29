<?php

class StaticExample{
    public static $number = 5;

    public static function hello(){
        return "hallloooooo " . self::$number++ . " kali.";
    }
}

echo StaticExample::$number;
echo "<br>";
echo StaticExample::hello();
echo "<br>";
echo StaticExample::hello();
echo "<br>";
echo StaticExample::hello();