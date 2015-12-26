<?php
//Создать интерфейс для класса User из предыдущих заданий
interface Customer
{
    public function __get($pass);
    public function __set($name, $value);
    public function __clone();
}
