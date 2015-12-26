<?php
//В класс User из предыдущих заданий добавить магические методы __get, __set для закрытых свойств, которые будут возвращать / присваивать соответствующие значения.
class User {
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
$a = new User();
echo $a->password;
echo "<br>";
$a->password = "admin";
echo "<br>";
echo $a->password;
echo "<br>";
$b = clone $a;
echo "<br>";

echo $a->qw;
echo "<br>";
$a->qw = "123";
echo "<br>";
echo $a->qw;
echo "<br>";
echo $a->novar;