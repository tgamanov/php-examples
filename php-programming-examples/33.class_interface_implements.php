<?php
//Создать интерфейс для класса User из предыдущих заданий
interface Customer
{
    public function __get($pass);
    public function __set($name, $value);
    public function __clone();
}
class User implements Customer
{
    public $login;
    private $password = "abracadabrA_007";
    private $qw="something";
    public $email;
    public $rating;
  public function __get($pass){

      echo "The {$pass} is "."'".$this->$pass."'.";
  }
    public function __set($name, $value)
    {
        $this->$name = $value;
        echo "You have changed the '{$name}' to '{$value}'.";
    }
    public function __clone()
    {
     echo "Class User has been cloned.";
    }
}