<?php

class Singleton{

    private static $obj;

    public static function getInstance(){
        if ( !self::$obj ){
            self::$obj = new Singleton();
        }
        return self::$obj;
    }

    private function __construct(){
        echo "Конструктор создан";
    }

}

$a = Singleton::getInstance();
$a = Singleton::getInstance();
$a = Singleton::getInstance();