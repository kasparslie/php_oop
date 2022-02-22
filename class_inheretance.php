<?php 
class Cars {

    var $wheels = 4;

    function greeting() {
        return "Hello";
    }

}

$bmw = new Cars();

class Trucks extends Cars {

}

$tachoma = new Trucks();

echo $tachoma -> wheels;
echo $tachoma -> greeting();

?>