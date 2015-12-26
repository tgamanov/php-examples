<?php
//Создать экземпляр класса User с конкретными значениями свойств и клонировать его в новую переменную. Свойствам нового экземпляра присвоить новые значения. Сравнить полученные экземпляры класса.
class User
{
    public $login;
    public $logout;
    public $password;
    public $email;
    public $rating;
}


$t = new User;
$t->login = "tgamanov";
$t->logout = "FALSE";
$t->password = "SuperpublicPassIn5102))";
$t->email = "tgamanov@gmail.com";
$t->rating = "medium";
$p = clone $t;
$p->login = "newcomer";
echo "<pre>";
var_dump($t);
echo "<br>";
var_dump($p);
echo "</pre>";
echo "<br>";
var_dump($t!=$p);