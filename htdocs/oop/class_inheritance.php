<?php

class Cars
{
var $wheels =4;
    function greeting()
    {
        echo "hello";
    }

}

$bmw = new Cars();

class Trucks extends Cars {
}

$Tacoma = new Trucks();

echo $Tacoma->wheels;