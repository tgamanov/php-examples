<?php
//Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров (использовать self)
class countobjects{
    private static $child = 0;
    public function __construct()
    {
    self::$child++;
    echo "there are ".self::$child." have been created from class countobjects."."<br/>";
    }
}
$q=new countobjects();
$w=new countobjects();
$e=new countobjects();
$r=new countobjects();
$t=new countobjects();
$y=new countobjects();