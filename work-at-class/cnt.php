<?php

class SelfCounter{

    private static $counter = 0;

    public function __construct(){
        self::$counter++;
        echo "Меня создали ".self::$counter."-й раз<br/>";
    }

}

$a = new SelfCounter();
$a = new SelfCounter();
$a = new SelfCounter();
$a = new SelfCounter();
$a = new SelfCounter();
$a = new SelfCounter();
$a = new SelfCounter();
$a = new SelfCounter();
$a = new SelfCounter();
$a = new SelfCounter();
$a = new SelfCounter();