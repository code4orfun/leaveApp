<?php

abstract class parentClass{
    abstract function calc($a, $b);
}

class child extends parentClass {

    function calc($a, $b)
    {
        echo $a * $b;
    }
}


$test = new child();
$test->calc(10,20);

?>